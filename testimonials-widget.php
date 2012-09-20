<?php
/*
	Plugin Name: Testimonials Widget
	Plugin URI: http://wordpress.org/extend/plugins/testimonials-widget/
	Description: Testimonials Widget plugin allows you to display random, rotating quotes or other content with images on your WordPress blog. You can insert content via widgets, shortcode or a theme function with multiple selection and display options.
	Version: 2.0.0
	Author: Michael Cannon
	Author URI: http://typo3vagabond.com/about-typo3-vagabond/hire-michael/
	License: GPL2
 */

/*
	Copyright 2012 Michael Cannon (email: michael@typo3vagabond.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


// permissions
// 	editor edit any
// 	author edit own
// widget
//  include css
// upgrade handling
// post meta data saving - handle post meta data saving and clearing
// setup languages
// caching
// migration from other plugins


// require_once 'lib/Testimonials_Widget.php';


class Testimonials_Widget{
	public function __construct() {
        add_theme_support( 'post-thumbnails' );
		add_action( 'init', array( &$this, 'init_post_type' ) );
		add_shortcode( 'testimonialswidget_list', array( &$this, 'shortcode_testimonialswidget_list' ) );
		// add_action( 'widgets_init', array( &$this, 'init_widgets' ) );

		if ( is_admin() ) {
        	add_action( 'gettext', array( &$this, 'gettext_testimonials' ) );
			add_filter( 'post_updated_messages', array( &$this, 'post_updated_messages' ) );
			add_filter( 'manage_edit-testimonials-widget_columns', array( &$this, 'manage_edit_testimonialswidget_columns' ) );
			add_action( 'manage_testimonials-widget_posts_custom_column', array( &$this, 'manage_testimonialswidget_posts_custom_column' ) );
			// add_action( 'admin_init' , array( &$this, 'init_meta_box' ) );
			// add_action( 'save_post' , array( &$this, 'save_testimonial_metadata' ) );
		}

		load_plugin_textdomain( 'testimonials-widget', false, 'testimonials-widget/languages' );
	}


	public function manage_testimonialswidget_posts_custom_column( $column ) {
		global $post;

		$result					= false;

		switch ( $column ) {
		case 'testimonials-widget-company':
		case 'testimonials-widget-email':
		case 'testimonials-widget-url':
			$result				=  make_clickable( get_post_meta( $post->ID, $column, true ) );
			break;

		case 'thumbnail':
			if ( has_post_thumbnail( $post->ID ) ) {
				$result			= get_the_post_thumbnail( $post->ID, 'thumbnail' );
			} elseif ( ! empty( $email ) ) {
				$result			= get_avatar( $email );
			} else {
				$result			= false;
			}
			break;
		}

		if ( $result )
			echo $result;
	}


	public function manage_edit_testimonialswidget_columns( $columns ) {
		// order of keys matches column ordering
		$columns				= array(
			'cb'							=> '<input type="checkbox" />',
			'thumbnail'						=> __( 'Image' ),
			'title'							=> __( 'Source' ),
			'testimonials-widget-email'		=> __( 'Email' ),
			'testimonials-widget-company'	=> __( 'Company' ),
			'testimonials-widget-url'		=> __( 'URL' ),
			'categories'					=> __( 'Category' ),
			'tags'							=> __( 'Tags' ),
			'date'							=> __( 'Date' ),
		);

		return $columns;
	}


	public function init_post_type() {
		$labels = array(
			'add_new'			=> __( 'New Testimonial' ),
			'add_new_item'		=> __( 'Add New Testimonial' ),
			'edit_item'			=> __( 'Edit Testimonial' ),
			'name'				=> __( 'Testimonials' ),
			'new_item'			=> __( 'Add New Testimonial' ),
			'not_found' 		=>  __( 'No testimonials found.' ),
			'not_found_in_trash'	=>  __( 'No testimonials found in Trash.' ),
			'parent_item_colon'	=> null,
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
				'custom-fields',
			),
			'taxonomies'		=> array(
				'category',
				'post_tag',
			)
		);

		register_post_type( 'testimonials-widget', $args );
	}


	public function testimonialswidget_list( $atts ) {
		$content				= self::shortcode_testimonialswidget_list( $atts );

		return $content;
	}


	public function shortcode_testimonialswidget_list( $atts ) {
		$testimonials			= self::get_testimonials( $atts );
		$content				= self::get_testimonials_html( $testimonials, $atts, true );

		return $content;
	}


	public function scripts() {
		wp_enqueue_script( 'jquery' );
	}


	public function styles() {
		wp_register_style( 'testimonials-widget', plugins_url( 'testimonials-widget.css', __FILE__) );
		wp_enqueue_style( 'testimonials-widget' );
	}


	public function get_testimonials_html( $testimonials, $atts, $is_list = false ) {
		self::styles();

		// display attributes
		$char_limit				= ( $atts['char_limit'] && is_numeric( $atts['char_limit'] ) ) ? intval( $atts['char_limit'] ) : false;
		$height					= ( $atts['height'] ) ? $atts['height'] : 'auto';
		$hide_source			= ( $atts['hide_source'] ) ? true : false;
		$hide_source			= ( $hide_source || $atts['hide_source'] ) ? true : false;
		$hide_company			= ( $atts['hide_company'] ) ? true : false;
		$hide_email				= ( $atts['hide_email'] ) ? true : false;
		$hide_image				= ( $atts['hide_image'] ) ? true : false;
		$hide_url				= ( $atts['hide_url'] ) ? true : false;

		$html					= '<div class="testimonialswidget_testimonials';
	   
		if ( $is_list )
			$html				.= ' testimonialswidget_testimonials_list';

		$html					.= '">';

		if ( empty( $testimonials ) ) {
			$testimonials		= array(
				array( 'testimonial_content'	=>	__( 'No testimonials found' ) )
			);
		}

		foreach ( $testimonials as $testimonial ) {
			$do_source			= ! $hide_source && ! empty( $testimonial['testimonial_source'] );
			$do_company			= ! $hide_company && ! empty( $testimonial['testimonial_company'] );
			$do_email			= ! $hide_email && ! empty( $testimonial['testimonial_email'] );
			$do_image			= ! $hide_image && ! empty( $testimonial['testimonial_image'] );
			$do_url				= ! $hide_url && ! empty( $testimonial['testimonial_url'] );

			if ( $char_limit ) {
				$testimonial['testimonial_content']	= self::testimonials_truncate( $testimonial['testimonial_content'], $char_limit );
			}

			$html				.= '<div class="testimonialswidget_testimonial';
		   
			if ( $is_list )
				$html			.= ' testimonialswidget_testimonial_list';

			$html				.= '">';

			if ( $do_image ) {
				$html			.= '<span class="testimonialswidget_image">';
				$html			.= $testimonial['testimonial_image'];
				$html			.= '</span>';
			}

			$html				.= '<q>';
			$html				.= make_clickable( $testimonial['testimonial_content'] );
			$html				.= '</q>';

			$cite				= '';

			if ( $do_source && $do_email ) {
				$cite			.= '<span class="testimonialswidget_author">';
				$cite			.= '<a href="mailto:' . $testimonial['testimonial_email'] . '">';
				$cite			.= $testimonial['testimonial_source'];
				$cite			.= '</a>';
				$cite			.= '</span>';
			} elseif ( $do_source ) {
				$cite			.= '<span class="testimonialswidget_author">';
				$cite			.= $testimonial['testimonial_source'];
				$cite			.= '</span>';
			} elseif ( $do_email ) {
				$cite			.= '<span class="testimonialswidget_email">';
				$cite			.= make_clickable( $testimonial['testimonial_email'] );
				$cite			.= '</span>';
			}

			if ( ( $do_company || $do_url ) && $cite )
				$cite			.= '<span class="testimonialswidget_join"></span>';

			if ( $do_company && $do_url ) {
				$cite			.= '<span class="testimonialswidget_company">';
				$cite			.= '<a href="' . $testimonial['testimonial_url'] . '">';
				$cite			.= $testimonial['testimonial_company'];
				$cite			.= '</a>';
				$cite			.= '</span>';
			} elseif ( $do_company ) {
				$cite			.= '<span class="testimonialswidget_company">';
				$cite			.= $testimonial['testimonial_company'];
				$cite			.= '</span>';
			} elseif ( $do_url ) {
				$cite			.= '<span class="testimonialswidget_url">';
				$cite			.= make_clickable( $testimonial['testimonial_url'] );
				$cite			.= '</span>';
			}

			if ( ! empty( $cite ) )
				$cite			= '<cite>' . $cite . '</cite>';

			$html				.= $cite;
			$html				.= '</div>';
		}

		$html					.= '</div>';

		return $html;
	}


	// Original PHP code as myTruncate2 by Chirp Internet: www.chirp.com.au
	public function testimonials_truncate( $string, $char_limit, $break = ' ', $pad = '…' ) {
		// return with no change if string is shorter than $char_limit
		if ( strlen( $string ) <= $char_limit )
			return $string;

		$string					= substr( $string, 0, $char_limit );
		if ( false !== ( $breakpoint = strrpos( $string, $break ) ) ) {
			$string				= substr( $string, 0, $breakpoint );
		}

		return $string . $pad;
	}


	public function get_testimonials( $atts ) {
		// TODO caching based upon md5(serialized($atts

		// selection attributes
		$category				= ( $atts['category'] ) ? $atts['category'] : false;
		$ids					= ( $atts['ids'] ) ? $atts['ids'] : false;
		$limit					= ( $atts['limit'] ) ? $atts['limit'] : 25;
		$order					= ( $atts['order'] ) ? $atts['order'] : 'DESC';
		$orderby				= ( $atts['orderby'] ) ? $atts['orderby'] : 'ID';
		$random					= ( $atts['random'] ) ? true : false;
		$tags					= ( $atts['tags'] ) ? $atts['tags'] : false;
		$tags_all				= ( $atts['tags_all'] ) ? true : false;

		if ( $random ) {
			$orderby			= 'rand';
			$order				= false;
		}

		$args					= array(
			'orderby'			=> $orderby,
			'post_status'		=> 'publish',
			'post_type'			=> 'testimonials-widget',
			'posts_per_page'	=> $limit,
		);

		if ( $order ) {
			$args['order']		= $order;
		}

		if ( $ids ) {
			$args['post__in']	= $ids;
		}

		if ( $category ) {
			$args['category_name']	= $category;
		}

		if ( $tags ) {
			$tags				= explode( ',', $tags );

			if ( $tags_all ) {
				$args['tag_slug__and']	= $tags;
			} else {
				$args['tag_slug__in']	= $tags;
			}
		}

		$testimonials			= new WP_Query( $args );
		wp_reset_postdata();

		$testimonial_data		= array();
		foreach( $testimonials->posts as $row ) {
			$post_id			= $row->ID;

			$email				= get_post_meta( $post_id, 'testimonials-widget-email', true );

			if ( has_post_thumbnail( $post_id ) ) {
				$image			= get_the_post_thumbnail( $post_id, 'thumbnail' );
			} elseif ( ! empty( $email ) ) {
				$image			= get_avatar( $email );
			} else {
				$image			= false;
			}

			$testimonial_data[]	= array(
				'testimonial_source'	=> $row->post_title,
				'testimonial_company'	=> get_post_meta( $post_id, 'testimonials-widget-company', true ),
				'testimonial_content'	=> $row->post_content,
				'testimonial_email'		=> $email,
				'testimonial_image'		=> $image,
				'testimonial_url'		=> get_post_meta( $post_id, 'testimonials-widget-url', true ),
			);
		}

		return $testimonial_data;
	}


	public function init_widgets() {
		register_widget( 'Testimonials_Widget' );
	}


	public function init_meta_box() {
		add_meta_box(
			'testimonials-widget-meta',
			__( 'Testimonial Data' ),
			array( &$this, 'meta_box_testimonial' ),
			'testimonials-widget', 'normal', 'high'
		);
	}


	public function meta_box_testimonial() {
		// TODO https://gist.github.com/1880770 meta_box class helper for
		// additional fields

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
		// TODO https://gist.github.com/1880770 meta_box class helper for
		// additional fields

		if ( defined( 'DOING_AJAX' ) ) return;
		global $post;
		update_post_meta( $post->ID, 'ivycat_testimonial_order', $_POST['testimonial_order'] );
	}


	/**
	 * Revise default new testimonial text
	 *
	 * Original author: Travis Ballard http://www.travisballard.com
	 *
	 * @param string $translation
	 * @return string $translation
	 */
	public function gettext_testimonials( $translation ) {
		remove_action( 'gettext', array( &$this, 'gettext_testimonials' ) );

		global $post;

		if ( 'testimonials-widget' == $post->post_type ) {
			switch( $translation ) {
			case __( 'Enter title here' ):
				return __( 'Testimonial Source' );
				break;
			}
		}

		add_action( 'gettext', array( &$this, 'gettext_testimonials' ) );

		return $translation;
	}


	/**
	 * Update messages for custom post type
	 *
	 * Original author: Travis Ballard http://www.travisballard.com
	 *
	 * @param mixed $m
	 * @return mixed $m
	 */
	public function post_updated_messages( $m ) {
		global $post;

		$m['testimonials-widget'] = array(
			0 => '', // Unused. Messages start at index 1.
			1 => sprintf( __( 'Testimonial updated. <a href="%s">View testimonial</a>' ), esc_url( get_permalink( $post->ID ) ) ),
			2 => __( 'Custom field updated.' ),
			3 => __( 'Custom field deleted.' ),
			4 => __( 'Testimonial updated.' ),
			/* translators: %s: date and time of the revision */
			5 => isset( $_GET['revision'] ) ? sprintf( __( 'Testimonial restored to revision from %s' ), wp_post_revision_title( (int)$_GET['revision'], false ) ) : false,
			6 => sprintf( __( 'Testimonial published. <a href="%s">View testimonial</a>' ), esc_url( get_permalink( $post->ID ) ) ),
			7 => __( 'Testimonial saved.' ),
			8 => sprintf( __( 'Testimonial submitted. <a target="_blank" href="%s">Preview testimonial</a>' ), esc_url( add_query_arg( 'preview', 'true', get_permalink($post->ID) ) ) ),
			9 => sprintf( __( 'Testimonial scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview testimonial</a>' ), date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) ), esc_url( get_permalink( $post->ID ) ) ),
			10 => sprintf( __( 'Testimonial draft updated. <a target="_blank" href="%s">Preview testimonial</a>' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post->ID ) ) ) )
		);

		return $m;
	}

}


$Testimonials_Widget			= new Testimonials_Widget();


// TODO move old TW table data to new custom post type
// register_activation_hook( __FILE__, 'testimonialswidget_install' );

?>
