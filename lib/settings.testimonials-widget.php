<?php

/**
 * Testimonials Widget settings class
 *
 * @ref http://alisothegeek.com/2011/01/wordpress-settings-api-tutorial-1/
 */
class Testimonials_Widget_Settings {
	const id					= 'testimonialswidget_settings';

	public static $defaults		= array();
	public static $sections		= array();
	public static $settings		= array();


	public function __construct() {
		self::load_sections();
		self::load_settings();

		add_action( 'admin_init', array( &$this, 'admin_init' ) );
		add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
		load_plugin_textdomain( 'testimonials-widget', false, '/testimonials-widget/languages/' );
	}


	public static function load_sections() {
		self::$sections['general']      = __( 'Defaults' , 'testimonials-widget');
		// self::$sections['testing']		= __( 'Testing' , 'testimonials-widget');
		self::$sections['reset']        = __( 'Reset' , 'testimonials-widget');
		self::$sections['about']        = __( 'About Testimonials Widget' , 'testimonials-widget');
	}


	public static function load_settings() {
		/* General Settings
		===========================================*/
		self::$settings['title']	= array(
			'title'   			=> __( 'Widget Title', 'testimonials-widget' ),
			'std'     			=> __( 'Testimonials', 'testimonials-widget' ),
		);

		self::$settings['title_link']	= array(
			'title'   			=> __( 'Title Link', 'testimonials-widget' ),
			'desc'    			=> __( 'URL or Post ID to link widget title to', 'testimonials-widget' ),
		);

		self::$settings['category']	= array(
			'title'   			=> __( 'Category Filter', 'testimonials-widget' ),
			'desc'    			=> __( 'Comma separated category slug-names', 'testimonials-widget' ),
		);

		self::$settings['tags']	= array(
			'title'   			=> __( 'Tags Filter', 'testimonials-widget' ),
			'desc'    			=> __( 'Comma separated tag slug-names', 'testimonials-widget' ),
		);

		self::$settings['tags_all']	= array(
			'title'   			=> __( 'Require All Tags?', 'testimonials-widget' ),
			'desc'    			=> __( 'Select only testimonials with all of the given tags', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['keep_whitespace']	= array(
			'title'   			=> __( 'Keep Whitespace?', 'testimonials-widget' ),
			'desc'    			=> __( 'Keeps testimonials looking as entered than sans auto-formatting', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_gravatar']	= array(
			'title'   			=> __( 'Hide Gravatar?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_image']	= array(
			'title'   			=> __( 'Hide Image?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_not_found']	= array(
			'title'   			=> __( 'Hide "Testimonials Not Found"?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_title']	= array(
			'title'   			=> __( 'Hide Title?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_source']	= array(
			'title'   			=> __( 'Hide Source?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
			'desc'				=> __( 'Don\'t display "Post Title" in cite', 'testimonials-widget' ),
		);

		self::$settings['hide_email']	= array(
			'title'   			=> __( 'Hide Email?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_company']	= array(
			'title'   			=> __( 'Hide Company?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['hide_url']	= array(
			'title'   			=> __( 'Hide URL?', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['target']	= array(
			'title'   			=> __( 'URL Target', 'testimonials-widget' ),
			'desc'				=> __( 'Leave blank if none', 'testimonials-widget' ),
		);

		self::$settings['char_limit']	= array(
			'title'   			=> __( 'Character Limit', 'testimonials-widget' ),
			'desc'				=> __( 'Number of characters to limit non-single testimonial views to', 'testimonials-widget' ),
		);

		self::$settings['ids']	= array(
			'title'   			=> __( 'Include IDs Filter', 'testimonials-widget' ),
			'desc'				=> __( 'Comma separated testimonial IDs', 'testimonials-widget' ),
		);

		self::$settings['exclude']	= array(
			'title'   			=> __( 'Exclude IDs Filter', 'testimonials-widget' ),
			'desc'				=> __( 'Comma separated testimonial IDs', 'testimonials-widget' ),
		);

		self::$settings['limit']	= array(
			'title'   			=> __( 'Limit', 'testimonials-widget' ),
			'desc'				=> __( 'Number of testimonials to select per instance', 'testimonials-widget' ),
			'std'				=> 10,
		);

		self::$settings['min_height']	= array(
			'title'   			=> __( 'Minimum Height', 'testimonials-widget' ),
			'desc'				=> __( 'Set for minimum display height', 'testimonials-widget' ),
		);

		self::$settings['max_height']	= array(
			'title'   			=> __( 'Maximum Height', 'testimonials-widget' ),
			'desc'				=> __( 'Set for maximum display height', 'testimonials-widget' ),
		);

		self::$settings['orderby']	= array(
			'title'   			=> __( 'ORDER BY', 'testimonials-widget' ),
			'desc'				=> __( 'Used when Random order is disabled', 'testimonials-widget' ),
			'type'    			=> 'select',
			'choices'			=> array(
				'ID'			=> __( 'Testimonial ID', 'testimonials-widget' ),
				'author'		=> __( 'Author', 'testimonials-widget' ),
				'title'			=> __( 'Source', 'testimonials-widget' ),
				'date'			=> __( 'Date', 'testimonials-widget' ),
				'none'			=> __( 'No order', 'testimonials-widget' ),
			),
			'std'				=> 'ID',
		);

		self::$settings['meta_key']	= array(
			'title'   			=> __( 'ORDER BY meta_key', 'testimonials-widget' ),
			'desc'				=> __( 'Used when Random order is disabled and sorting by a testimonials meta key is needed. Overrides ORDER BY', 'testimonials-widget' ),
			'type'    			=> 'select',
			'choices'			=> array(
				''								=> __( 'None' , 'testimonials-widget'),
				'testimonials-widget-title' 	=> __( 'Title' , 'testimonials-widget'),
				'testimonials-widget-email' 	=> __( 'Email' , 'testimonials-widget'),
				'testimonials-widget-company' 	=> __( 'Company' , 'testimonials-widget'),
				'testimonials-widget-url' 		=> __( 'URL' , 'testimonials-widget'),
			),
		);

		self::$settings['order']	= array(
			'title'   			=> __( 'ORDER BY Order', 'testimonials-widget' ),
			'type'    			=> 'select',
			'choices'			=> array(
				'DESC'			=> __( 'Descending', 'testimonials-widget' ),
				'ASC'			=> __( 'Ascending', 'testimonials-widget' ),
			),
			'std'				=> 'DESC',
		);

		self::$settings['random']	= array(
			'title'   			=> __( 'Random Order?', 'testimonials-widget' ),
			'desc'				=> __( 'Unchecking this will rotate testimonials per ORDER BY and ORDER BY Order', 'testimonials-widget' ),
			'type'				=> 'checkbox',
		);

		self::$settings['refresh_interval']	= array(
			'title'   			=> __( 'Rotation Speed', 'testimonials-widget' ),
			'desc'				=> __( 'Number of seconds between testimonial rotations or 0 for no refresh', 'testimonials-widget' ),
			'std'				=> 5,
		);

		self::$settings['widget_text']	= array(
			'title'   			=> __( 'Widget Bottom Text', 'testimonials-widget' ),
			'type'    			=> 'textarea',
		);

		self::$settings['paging']	= array(
			'title'   			=> __( 'Enable Paging?', 'testimonials-widget' ),
			'desc'   			=> __( 'For `[testimonialswidget_list]`', 'testimonials-widget' ),
			'type'    			=> 'select',
			'choices'			=> array(
				''				=> __( 'Disable', 'testimonials-widget' ),
				1				=> __( 'Enable', 'testimonials-widget' ),
				'before'		=> __( 'Before testimonials', 'testimonials-widget' ),
				'after'			=> __( 'After testimonials', 'testimonials-widget' ),
			),
			'std'				=> 1,
		);


		/* Debug
		===========================================*/
		self::$settings['debug_mode'] = array(
			'section' => 'testing',
			'title'   => __( 'Debug Mode?' , 'testimonials-widget'),
			'desc'	  => __( 'Not implemented yet', 'testimonials-widget' ),
			'type'    => 'checkbox',
		);

		/* Reset
		===========================================*/
		self::$settings['reset_defaults'] = array(
			'section' => 'reset',
			'title'   => __( 'Defaults Reset?' , 'testimonials-widget'),
			'type'    => 'checkbox',
			'class'   => 'warning', // Custom class for CSS
			'desc'    => __( 'Check this box and click "Save Changes" below to reset plugin settings to their defaults.' , 'testimonials-widget')
		);

		// Reference
		if ( false ) {
		self::$settings['example_text'] = array(
			'title'   => __( 'Example Text Input' , 'testimonials-widget'),
			'desc'    => __( 'This is a description for the text input.' , 'testimonials-widget'),
			'std'     => 'Default value',
		);

		self::$settings['example_textarea'] = array(
			'title'   => __( 'Example Textarea Input' , 'testimonials-widget'),
			'desc'    => __( 'This is a description for the textarea input.' , 'testimonials-widget'),
			'std'     => 'Default value',
			'type'    => 'textarea',
		);

		self::$settings['example_checkbox'] = array(
			'title'   => __( 'Example Checkbox' , 'testimonials-widget'),
			'desc'    => __( 'This is a description for the checkbox.' , 'testimonials-widget'),
			'type'    => 'checkbox',
			'std'     => 1 // Set to 1 to be checked by default, 0 to be unchecked by default.
		);

		self::$settings['example_heading'] = array(
			'title'   => '', // Not used for headings.
			'desc'    => 'Example Heading',
			'type'    => 'heading'
		);

		self::$settings['example_radio'] = array(
			'title'   => __( 'Example Radio' , 'testimonials-widget'),
			'desc'    => __( 'This is a description for the radio buttons.' , 'testimonials-widget'),
			'type'    => 'radio',
			'choices' => array(
				'choice1' => 'Choice 1',
				'choice2' => 'Choice 2',
				'choice3' => 'Choice 3'
			)
		);

		self::$settings['example_select'] = array(
			'title'   => __( 'Example Select' , 'testimonials-widget'),
			'desc'    => __( 'This is a description for the drop-down.' , 'testimonials-widget'),
			'type'    => 'select',
			'choices' => array(
				'choice1' => 'Other Choice 1',
				'choice2' => 'Other Choice 2',
				'choice3' => 'Other Choice 3'
			)
		);
		}
	}


	public function admin_init() {
		if ( ! get_option( self::id ) )
			$this->initialize_settings();

		$this->register_settings();
	}


	public function admin_menu() {
		$admin_page				= add_submenu_page( 'edit.php?post_type=' . Testimonials_Widget::pt, __( 'Testimonials Widget Settings', 'testimonials-widget' ), __( 'Settings', 'testimonials-widget' ), 'manage_options', self::id, array( 'Testimonials_Widget_Settings', 'display_page' ) );

		add_action( 'admin_print_scripts-' . $admin_page, array( &$this, 'scripts' ) );
		add_action( 'admin_print_styles-' . $admin_page, array( &$this, 'styles' ) );
	}


	public function create_setting( $args = array() ) {
		$defaults				= array(
			'id'      			=> 'default_field',
			'title'   			=> __( 'Default Field' , 'testimonials-widget'),
			'desc'    			=> '',
			'std'     			=> '',
			'type'    			=> 'text',
			'section' 			=> 'general',
			'choices' 			=> array(),
			'class'   			=> ''
		);

		extract( wp_parse_args( $args, $defaults ) );

		$field_args				= array(
			'type'      		=> $type,
			'id'        		=> $id,
			'desc'      		=> $desc,
			'std'       		=> $std,
			'choices'   		=> $choices,
			'label_for' 		=> $id,
			'class'     		=> $class
		);

		self::$defaults[$id]	= $std;

		add_settings_field( $id, $title, array( &$this, 'display_setting' ), self::id, $section, $field_args );
	}


	public function display_page() {
		echo '<div class="wrap">
			<div class="icon32" id="icon-options-general"></div>
			<h2>' . __( 'Testimonials Widget Settings' , 'testimonials-widget') . '</h2>';

		echo '<form action="options.php" method="post">';

		settings_fields( self::id );

		echo '<div class="ui-tabs">
			<ul class="ui-tabs-nav">';

		foreach ( self::$sections as $section_slug => $section )
			echo '<li><a href="#' . $section_slug . '">' . $section . '</a></li>';

		echo '</ul>';

		do_settings_sections( self::id );

		echo '</div>';

		echo '
			<p class="submit"><input name="Submit" type="submit" class="button-primary" value="' . __( 'Save Changes' , 'testimonials-widget') . '" /></p>
		</form>
		';

		echo '
			<p>When ready, <a href="'.get_admin_url().'edit.php?post_type=testimonials-widget">view</a>
			or <a href="'.get_admin_url().'post-new.php?post_type=testimonials-widget">add</a> testimonials.</p>

			<p>If you like this plugin, <a href="http://aihr.us/about-aihrus/donate/" title="Donate for Good Karma">please donate</a> or <a href="http://aihr.us/wordpress/testimonials-widget-premium/" title="purchase Testimonials Widget Premium">purchase Testimonials Widget Premium</a> to help fund further development and <a href="http://wordpress.org/support/plugin/testimonials-widget" title="Support forums">support</a>.</p>
		';

		$text					= __( 'Copyright &copy;%1$s %2$s.' );
		$link					= '<a href="http://aihr.us">Aihrus</a>';
		$copyright				= '<div class="copyright">' . sprintf( $text, date( 'Y' ), $link ) . '</div>';
		echo $copyright;

		self::section_scripts();

		echo '</div>';
	}


	public static function section_scripts() {
		echo '<script type="text/javascript">
			jQuery(document).ready(function($) {
				var sections = [];';

				foreach ( self::$sections as $section_slug => $section )
					echo "sections['$section'] = '$section_slug';";

				echo 'var wrapped = $(".wrap h3").wrap("<div class=\"ui-tabs-panel\">");
				wrapped.each(function() {
					$(this).parent().append($(this).parent().nextUntil("div.ui-tabs-panel"));
	});
	$(".ui-tabs-panel").each(function(index) {
		$(this).attr("id", sections[$(this).children("h3").text()]);
		if (index > 0)
			$(this).addClass("ui-tabs-hide");
	});
	$(".ui-tabs").tabs({
		fx: { opacity: "toggle", duration: "fast" }
	});

	$("input[type=text], textarea").each(function() {
		if ($(this).val() == $(this).attr("placeholder") || $(this).val() == "")
			$(this).css("color", "#999");
	});

	$("input[type=text], textarea").focus(function() {
		if ($(this).val() == $(this).attr("placeholder") || $(this).val() == "") {
			$(this).val("");
			$(this).css("color", "#000");
	}
	}).blur(function() {
		if ($(this).val() == "" || $(this).val() == $(this).attr("placeholder")) {
			$(this).val($(this).attr("placeholder"));
			$(this).css("color", "#999");
	}
	});

	$(".wrap h3, .wrap table").show();

	// This will make the "warning" checkbox class really stand out when checked.
	// I use it here for the Reset checkbox.
	$(".warning").change(function() {
		if ($(this).is(":checked"))
			$(this).parent().css("background", "#c00").css("color", "#fff").css("fontWeight", "bold");
		else
			$(this).parent().css("background", "none").css("color", "inherit").css("fontWeight", "normal");
	});

	// Browser compatibility
	if ($.browser.mozilla) 
		$("form").attr("autocomplete", "off");
	});
	</script>';
	}


	public function display_section() {
		// code
	}


	public function display_about_section() {

		echo					<<<EOD
			<div style="width: 70%;">
				<p><img class="alignright size-medium" title="Michael in Red Square, Moscow, Russia" src="/wp-content/plugins/testimonials-widget/media/michael-cannon-red-square-300x2251.jpg" alt="Michael in Red Square, Moscow, Russia" width="300" height="225" /><a href="http://wordpress.org/extend/plugins/testimonials-widget/">Testimonials Widget</a> is by <a href="http://aihr.us/about-aihrus/michael-cannon-resume/">Michael Cannon</a>. He's <a title="Lot's of stuff about Peichi Liu…" href="http://peimic.com/t/peichi-liu/">Peichi’s</a> smiling man, an&nbsp;adventurous <a title="Water rat" href="http://www.chinesehoroscope.org/chinese_zodiac/rat/" target="_blank">water-rat</a>,&nbsp;<a title="Aihrus –&nbsp;website support made easy since 1999" href="http://aihrus.localhost/">chief technology officer</a>,&nbsp;<a title="Road biker, cyclist, biking; whatever you call, I love to ride" href="http://peimic.com/c/biking/">cyclist</a>,&nbsp;<a title="Michael's poetic like literary ramblings" href="http://peimic.com/t/poetry/">poet</a>,&nbsp;<a title="World Wide Opportunities on Organic Farms" href="http://peimic.com/t/WWOOF/">WWOOF’er</a>&nbsp;and&nbsp;<a title="My traveled to country list, is more than my age." href="http://peimic.com/c/travel/">world traveler</a>.</p>
			</div>
EOD;

	}


	public static function display_setting( $args = array() ) {
		extract( $args );

		$options				= get_option( self::id );

		if ( ! isset( $options[$id] ) && $type != 'checkbox' )
			$options[$id]		= $std;
		elseif ( ! isset( $options[$id] ) )
			$options[$id]		= 0;

		$field_class			= '';
		if ( ! empty( $class ) )
			$field_class		= ' ' . $class;

		switch ( $type ) {

			case 'heading':
				echo '</td></tr><tr valign="top"><td colspan="2"><h4>' . $desc . '</h4>';
				break;

			case 'checkbox':

				echo '<input class="checkbox' . $field_class . '" type="checkbox" id="' . $id . '" name="' . self::id . '[' . $id . ']" value="1" ' . checked( $options[$id], 1, false ) . ' /> ';

				if ( ! empty( $desc ) )
					echo '<label for="' . $id . '"><span class="description">' . $desc . '</span></label>';

				break;

			case 'select':
				echo '<select class="select' . $field_class . '" name="' . self::id . '[' . $id . ']">';

				foreach ( $choices as $value => $label )
					echo '<option value="' . esc_attr( $value ) . '"' . selected( $options[$id], $value, false ) . '>' . $label . '</option>';

				echo '</select>';

				if ( ! empty( $desc ) )
					echo '<br /><span class="description">' . $desc . '</span>';

				break;

			case 'radio':
				$i = 0;
				foreach ( $choices as $value => $label ) {
					echo '<input class="radio' . $field_class . '" type="radio" name="' . self::id . '[' . $id . ']" id="' . $id . $i . '" value="' . esc_attr( $value ) . '" ' . checked( $options[$id], $value, false ) . '> <label for="' . $id . $i . '">' . $label . '</label>';
					if ( $i < count( $options ) - 1 )
						echo '<br />';
					$i++;
				}

				if ( ! empty( $desc ) )
					echo '<br /><span class="description">' . $desc . '</span>';

				break;

			case 'textarea':
				echo '<textarea class="' . $field_class . '" id="' . $id . '" name="' . self::id . '[' . $id . ']" placeholder="' . $std . '" rows="5" cols="30">' . wp_htmledit_pre( $options[$id] ) . '</textarea>';

				if ( ! empty( $desc ) )
					echo '<br /><span class="description">' . $desc . '</span>';

				break;

			case 'password':
				echo '<input class="regular-text' . $field_class . '" type="password" id="' . $id . '" name="' . self::id . '[' . $id . ']" value="' . esc_attr( $options[$id] ) . '" />';

				if ( ! empty( $desc ) )
					echo '<br /><span class="description">' . $desc . '</span>';

				break;

			case 'text':
			default:
		 		echo '<input class="regular-text' . $field_class . '" type="text" id="' . $id . '" name="' . self::id . '[' . $id . ']" placeholder="' . $std . '" value="' . esc_attr( $options[$id] ) . '" />';

				if ( ! empty( $desc ) )
		 			echo '<br /><span class="description">' . $desc . '</span>';

		 		break;

		}
	}


	public function initialize_settings() {
		$default_settings		= array();

		foreach ( self::$settings as $id => $setting ) {
			if ( $setting['type'] != 'heading' )
				$default_settings[$id]	= $setting['std'];
		}

		update_option( self::id, $default_settings );
	}


	public function register_settings() {
		register_setting( self::id, self::id, array ( &$this, 'validate_settings' ) );

		foreach ( self::$sections as $slug => $title ) {
			if ( $slug == 'about' )
				add_settings_section( $slug, $title, array( &$this, 'display_about_section' ), self::id );
			else
				add_settings_section( $slug, $title, array( &$this, 'display_section' ), self::id );
		}

		foreach ( self::$settings as $id => $setting ) {
			$setting['id']		= $id;
			$this->create_setting( $setting );
		}
	}


	public function scripts() {
		wp_print_scripts( 'jquery-ui-tabs' );
	}


	public function styles() {
		wp_register_style( __CLASS__ . '-admin', plugins_url( 'settings.css', __FILE__ ) );
		wp_enqueue_style( __CLASS__ . '-admin' );
	}


	public static function validate_settings( $input ) {
		if ( ! empty( $input['reset_defaults'] ) ) {
			foreach ( self::$defaults as $id => $std ) {
				$input[$id]		= $std;
			}

			unset( $input['reset_defaults'] );
		}

		if ( isset( $input['category'] ) )
			$input['category']		= ( empty( $input['category'] ) || preg_match( '#^[\w-]+(,[\w-]+)*$#', $input['category'] ) ) ? $input['category'] : self::$defaults['category'];

		if ( isset( $input['char_limit'] ) )
			$input['char_limit']	= ( empty( $input['char_limit'] ) || ( is_numeric( $input['char_limit'] ) && 0 <= $input['char_limit'] ) ) ? $input['char_limit'] : self::$defaults['char_limit'];

		if ( isset( $input['exclude'] ) )
			$input['exclude']		= ( empty( $input['exclude'] ) || preg_match( '#^\d+(,\d+)*$#', $input['exclude'] ) ) ? $input['exclude'] : self::$defaults['exclude'];

		if ( isset( $input['hide_company'] ) )
			$input['hide_company']	= self::is_true( $input['hide_company'], false );

		if ( isset( $input['hide_email'] ) )
			$input['hide_email']	= self::is_true( $input['hide_email'], false );

		if ( isset( $input['hide_gravatar'] ) )
			$input['hide_gravatar']	= self::is_true( $input['hide_gravatar'], false );

		if ( isset( $input['hide_image'] ) )
			$input['hide_image']	= self::is_true( $input['hide_image'], false );

		if ( isset( $input['hide_not_found'] ) )
			$input['hide_not_found']	= self::is_true( $input['hide_not_found'], false );

		if ( isset( $input['hide_source'] ) )
			$input['hide_source']	= self::is_true( $input['hide_source'], false );

		if ( isset( $input['hide_title'] ) )
			$input['hide_title']	= self::is_true( $input['hide_title'], false );

		if ( isset( $input['hide_url'] ) )
			$input['hide_url']		= self::is_true( $input['hide_url'], false );

		if ( isset( $input['ids'] ) )
			$input['ids']			= ( empty( $input['ids'] ) || preg_match( '#^\d+(,\d+)*$#', $input['ids'] ) ) ? $input['ids'] : self::$defaults['ids'];

		if ( isset( $input['keep_whitespace'] ) )
			$input['keep_whitespace']	= self::is_true( $input['keep_whitespace'], false );

		if ( isset( $input['limit'] ) )
			$input['limit']			= ( empty( $input['limit'] ) || ( is_numeric( $input['limit'] ) && 0 < $input['limit'] ) ) ? $input['limit'] : self::$defaults['limit'];

		if ( isset( $input['max_height'] ) )
			$input['max_height']	= ( empty( $input['max_height'] ) || ( is_numeric( $input['max_height'] ) && 0 <= $input['max_height'] ) ) ? $input['max_height'] : self::$defaults['max_height'];

		if ( isset( $input['meta_key'] ) )
			$input['meta_key']		= ( preg_match( '#^[\w-,]+$#', $input['meta_key'] ) ) ? $input['meta_key'] : self::$defaults['meta_key'];

		if ( isset( $input['min_height'] ) )
			$input['min_height']	= ( empty( $input['min_height'] ) || ( is_numeric( $input['min_height'] ) && 0 <= $input['min_height'] ) ) ? $input['min_height'] : self::$defaults['min_height'];

		if ( isset( $input['order'] ) )
			$input['order']			= ( preg_match( '#^desc|asc$#i', $input['order'] ) ) ? $input['order'] : self::$defaults['order'];

		if ( isset( $input['orderby'] ) )
			$input['orderby']		= ( preg_match( '#^\w+$#', $input['orderby'] ) ) ? $input['orderby'] : self::$defaults['orderby'];

		if ( isset( $input['random'] ) )
			$input['random']		= self::is_true( $input['random'], false );

		if ( isset( $input['refresh_interval'] ) )
			$input['refresh_interval']	= ( empty( $input['refresh_interval'] ) || ( is_numeric( $input['refresh_interval'] ) && 0 <= $input['refresh_interval'] ) ) ? $input['refresh_interval'] : self::$defaults['refresh_interval'];

		if ( isset( $input['tags'] ) )
			$input['tags']			= ( empty( $input['tags'] ) || preg_match( '#^[\w-]+(,[\w-]+)*$#', $input['tags'] ) ) ? $input['tags'] : self::$defaults['tags'];

		if ( isset( $input['tags_all'] ) )
			$input['tags_all']		= self::is_true( $input['tags_all'], false );

		if ( isset( $input['target'] ) )
			$input['target']		= ( empty( $input['target'] ) || preg_match( '#^\w+$#', $input['target'] ) ) ? $input['target'] : self::$defaults['target'];

		if ( isset( $input['title'] ) )
			$input['title']			= wp_kses_data( $input['title'] );

		if ( isset( $input['title_link'] ) )
			$input['title_link']	= wp_kses_data( $input['title_link'] );

		if ( isset( $input['widget_text'] ) )
			$input['widget_text']	= wp_kses_post( $input['widget_text'] );

		return $input;
	}


	public static function is_true( $value = null, $return_boolean = true ) {
		if ( true === $value || true == $value || 'true' == $value || 1 == $value ) {
			if ( $return_boolean )
				return true;
			else
				return 1;
		} else {
			if ( $return_boolean )
				return false;
			else
				return 0;
		}
	}
}


$Testimonials_Widget_Settings	= new Testimonials_Widget_Settings();


function tw_get_options() {
	$options					= get_option( Testimonials_Widget_Settings::id, array() );

	return $options;
}


function tw_get_option( $option, $default = null ) {
	$options					= get_option( Testimonials_Widget_Settings::id, array() );

	if ( isset( $options[$option] ) )
		return $options[$option];
	else
		return $default;
}


function tw_set_option( $option, $value = null ) {
	$options					= get_option( Testimonials_Widget_Settings::id );

	if ( ! is_array( $options ) ) {
		$options				= array();
	}

	$options[$option]			= $value;
	update_option( Testimonials_Widget_Settings::id, $options );
}

?>