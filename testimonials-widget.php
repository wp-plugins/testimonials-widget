<?php
/*
	Plugin Name: Testimonials Widget
	Plugin URI: http://wordpress.org/extend/plugins/testimonials-widget/
	Description: Testimonials Widget plugin allows you to display random, rotating quotes or other content with images on your WordPress blog. You can insert content via widgets, shortcode or a theme function with multiple selection and display options.
	Version: 2.0.0
	Author: Michael Cannon
	Author URI: http://typo3vagabond.com/about-typo3-vagabond/hire-michael/
	License: GPLv3 or later
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

/* 
	Copyright 2012 Michael Cannon

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


// use class modeling
// init for custom post type and custom fields
// columns view helper
// change post author
// message views
// contextual help?
// help text
// org
// 	title is author
// 	content is quote
// 	thumbnail is image
// if shortcode called, then include css
// widget
// 	caching!
// install handling
// upgrade handling
// migration from other plugins
// load languages
// post data saving - handle post meta data saving and clearing
// ? allow filtering of selection criteria ?
// general settings screen


define( 'ICTESTI_URL', str_replace( ABSPATH, site_url( '/' ), __DIR__ ) );

// require_once 'lib/Testimonials_Widget.php';


class Testimonials_Widget{
	public function __construct() {
		add_action( 'init', array( &$this, 'init_post_type' ) );
		add_action( 'admin_init' , array( &$this, 'init_meta_box' ) );
		add_action( 'save_post' , array( &$this, 'save_testimonial_metadata' ) );
		add_shortcode( 'testimonialswidget_list', array( &$this, 'do_testimonials' ) );
		add_action( 'wp_ajax_get-testimonials',  array( &$this, 'more_testimonials' ) );
		add_action( 'wp_ajax_nopriv_get-slides',  array( &$this, 'more_testimonials' ) );
		add_action( 'widgets_init', array( &$this, 'init_widgets' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'load_scripts'));
	}


	public function init_post_type() {
		$labels = array(
			'add_new'			=> __( 'New Testimonial' ),
			'add_new_item'		=> __( 'Add New Testimonial' ),
			'edit_item'			=> __( 'Edit Testimonial' ),
			'name'				=> __( 'Testimonials' ),
			'new_item'			=> __( 'Add New Testimonial' ),
			'not_found' 		=>  __('No testimonials found.'),
			'not_found_in_trash'	=>  __('No testimonials found in Trash.'),
			'parent_item_colon' 	=> null,
			'search_items'		=> __( 'Search Testimonials' ),
			'singular_name'		=> __( 'Testimonial' ),
			'view_item'			=> __( 'View Testimonial' ),
		);

		$args = array(
			'label'				=> __( 'Testimonials' ),
			'capability_type' 	=> 'post',
			'has_archive'		=> true,
			'hierarchical' 		=> false,
			'labels'			=> $labels,
			'menu_position' 	=> 4,
			'public' 			=> true,
			'publicly_queryable'	=> true,
			'query_var' 		=> true,
			'rewrite'			=> array( 'slug' => 'testimonial' ),
			'show_in_menu'		=> true,
			'show_ui' 			=> true, 
			'supports' 			=> array(
				'title',
				'editor',
				'thumbnail',
			),
			'taxonomies'		=> array(
				'category',
				'post_tag',
			)
		);

		register_post_type( 'testimonials-widget', $args );
	}


	public function load_scripts() {
		wp_enqueue_script( 'ict-ajax-scripts', ICTESTI_URL . '/assets/ivycat_testimonials_scripts.js', array( 'jquery' ) );
		wp_localize_script( 'ict-ajax-scripts', 'ICSaconn', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'themeurl' => get_bloginfo( 'stylesheet_directory' ).'/',
			'pluginurl' => ICTESTI_URL
		)
	);
	}


	public function init_widgets() {
		// register_widget( 'Testimonials_Widget' );
	}


	public function init_meta_box() {
		add_meta_box(
			'testimonials-widget-meta',
			__('Testimonial Data'),
			array( &$this, 'meta_box_testimonial' ),
			'testimonials-widget', 'side', 'high'
		);
	}


	public function meta_box_testimonial() {
		global $post;
		$testimonial_order = get_post_meta( $post->ID, 'ivycat_testimonial_order', true);
?>
		<ul>
			<li>
				<label for="test-order">Order: </label>
				<input id="test-order" type="text" name="testimonial_order" value="<?php echo ( $testimonial_order ) ? $testimonial_order : '0'; ?>" />
			</li>
		</ul>
<?php
	}


	public function save_testimonial_metadata() {
		if( defined( 'DOING_AJAX') ) return;
		global $post;
		update_post_meta( $post->ID, 'ivycat_testimonial_order', $_POST['testimonial_order'] );
	}


	public function do_testimonials( $atts ) {
		$quantity = ( $atts['quantity'] ) ? $atts['quantity'] : 3;
		$testimonial_group = ( $atts['group'] ) ?  $atts['group'] : false;
		$testimonials = self::get_testimonials( 1, $testimonial_group );
		ob_start();

?>
		<div id="ivycat-testimonial">

			<blockquote class="testimonial-content">
				<div class="content"><?php echo $testimonials[0]['testimonial_content'] ?></div>
				<footer>
					<cite>
						<?php echo $testimonials[0]['testimonial_title']; ?>
					</cite>
				</footer>
			</blockquote>
			<input id="testimonial-dets" type="hidden" name="testimonial-dets" value="<?php echo $quantity . '|' . $testimonial_group; ?>">
		</div>
<?php
		$contents = ob_get_contents();
		ob_clean();
		return $contents;
	}


	public function more_testimonials() {
		$dets = explode( '|', $_POST['testimonial-dets'] );
		$group = ( $dets[1] == 'All Groups' ) ? false : $dets[1];
		$testimonials = self::get_testimonials( $dets[0], $group );
		echo json_encode( $testimonials );
		exit;
	}


	public function get_testimonials( $quantity , $group ) {
		$args = array(
			"post_type" => "testimonials",
			"orderby" => 'meta_value_num',
			'meta_key' => 'ivycat_testimonial_order',
			'order' => 'DESC',
			"posts_per_page" => $quantity,
		);
		if( $group ) {
			$args["tax_query"] = array(
				array(
					"taxonomy" => "testimonial-group",
					"field" => "slug",
					"terms" => $group
				)
			);
		}
		$testimonials = new WP_Query( $args );
		wp_reset_postdata();
		$testimonial_data = array();
		foreach( $testimonials->posts as $row ) {
			$testimonial_data[] = array(
				"testimonial_id" => $row->ID,
				"testimonial_title" => $row->post_title,
				"testimonial_content" => $row->post_content
			);
		}
		return $testimonial_data;
	}
}

$Testimonials_Widget			= new Testimonials_Widget();

?>
