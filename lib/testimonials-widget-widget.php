<?php

class Testimonials_Widget_Widget extends WP_Widget {
	public function Testimonials_Widget_Widget() {
		// Widget settings
		$widget_ops				= array(
			'classname'			=> 'Testimonials_Widget_Widget',
			'description'		=> __( 'Display testimonials with multiple selection and display options', 'testimonials-widget' )
		);

		// Widget control settings
		$control_ops			= array(
			'id_base'			=> 'testimonials_widget',
		);

		// Create the widget
		$this->WP_Widget(
			'testimonials_widget',
			__( 'Testimonials Widget', 'testimonials-widget' ),
			$widget_ops,
			$control_ops
		);
	}


	public function get_testimonials_css() {
		Testimonials_Widget::get_testimonials_css();
	}


	public function get_testimonials_scripts() {
		Testimonials_Widget::get_testimonials_scripts();
	}


	public function widget( $args, $instance ) {
		global $before_widget, $before_title, $after_title, $after_widget;

		$args					= wp_parse_args( $args, Testimonials_Widget::get_defaults() );
		extract( $args );

		// Our variables from the widget settings
		$title					= apply_filters( 'widget_title', $instance['title'], null );

		$testimonials			= Testimonials_Widget::testimonialswidget_widget( $instance, $this->number );

		// Before widget (defined by themes)
		echo $before_widget;

		// Display the widget title if one was input (before and after defined by themes)
		if ( ! empty( $title ) ) {
			if ( ! empty( $instance['title_link'] ) ) {
				// revise title with title_link link creation
				$title_link		= $instance['title_link'];
			   
				if ( preg_match( '#^\d+$#', $title_link ) ) {
					$new_title	= '<a href="';
					$new_title	.= get_permalink( $title_link );
					$new_title	.= '" title="';
					$new_title	.= get_the_title( $title_link );
					$new_title	.= '">';
					$new_title	.= $title;
					$new_title	.= '</a>';

					$title		= $new_title;
				} else {
					if ( 0 === preg_match( "#https?://#", $title_link ) ) {
						$title_link	= 'http://' . $title_link;
					}

					$new_title	= '<a href="';
					$new_title	.= $title_link;
					$new_title	.= '" title="';
					$new_title	.= $title;
					$new_title	.= '"';

					if ( ! empty( $instance['target'] ) ) {
						$new_title	.= ' target="';
						$new_title	.= $instance['target'];
						$new_title	.= '" ';
					}

					$new_title	.= '>';
					$new_title	.= $title;
					$new_title	.= '</a>';

					$title		= $new_title;
				}
			}
			
			echo $before_title . $title . $after_title;
		}

		// Display Widget
		echo $testimonials;

		// After widget (defined by themes)
		echo $after_widget;
	}


	public function update( $new_instance, $old_instance ) {
		$new_instance				= Testimonials_Widget_Settings::validate_settings( $new_instance );
		$old_instance				= array_merge( $old_instance, $new_instance );

		$instance					= apply_filters( 'testimonials_widget_options_update', $old_instance, $new_instance );

		return $instance;
	}

	public function form( $instance ) {
		$defaults				= Testimonials_Widget::get_defaults();
		$do_number				= true;

		if ( empty( $instance ) ) {
			$do_number			= false;
			if ( empty( $defaults['char_limit']	) )
				$defaults['char_limit']	= 500;

			if ( empty( $defaults['random']	) )
				$defaults['random']		= 'true';

			$instance			= array();
		}

		$instance				= wp_parse_args( $instance, $defaults );

		// TODO pull form_parts from master

		$form_parts				= array();

		if ( $do_number ) {
			$number				= $this->number;
			$class				= ' .' . Testimonials_Widget::id . $number;
			$form_parts['css_class']	= '<p><label for="' . $this->get_field_id( 'css_class' ) . '">' . __( 'CSS class', 'testimonials-widget' ) . '</label><input class="widefat" type="text" readonly="readonly" id="' . $this->get_field_id( 'css_class' ) . '" name="' . $this->get_field_name( 'css_class' ) . '" value="' . $class . '" /><br/><span class="setting-description"><small>' . __( 'Widget\'s unique CSS class for styling', 'testimonials-widget' ) . '</small></span></p>';
		}


		// $form_parts['keep_whitespace']	= '<p><input type="checkbox" id="' . $this->get_field_id( 'keep_whitespace' ) . '" name="' . $this->get_field_name( 'keep_whitespace' ) . '" value="true"' . checked( $instance['keep_whitespace'], 'true', false ) . ' /> <label for="' . $this->get_field_id( 'keep_whitespace' ) . '">' . __( 'Keep whitespace?', 'testimonials-widget' ) . '</label><br/><span class="setting-description"><small>' . __( 'Keeps testimonials looking as entered than sans auto-formatting', 'testimonials-widget' ) . '</small></span></p>';

		$form_parts['adv_key']	= "<p style=\"text-align:left;\"><small><a id=\"" . $this->get_field_id( 'adv_key' ) . "\" style=\"cursor:pointer;\" onclick=\"jQuery( 'div#" . $this->get_field_id( 'adv_opts' ) . "' ) . slideToggle();\">" . __( 'Advanced Options', 'testimonials-widget' ) . " &raquo;</a></small></p>";

		$form_parts['adv_opts']	= '<div id="' . $this->get_field_id( 'adv_opts' ) . '" style="display:none">';

		// $form_parts['widget_text']	= '<p><label for="' . $this->get_field_id( 'widget_text' ) . '">' . __( 'Widget Bottom Text', 'testimonials-widget' ) . '</label><br/><span class="setting-description"><small>' . __( 'Custom text or HTML for bottom of widgets', 'testimonials-widget' ) . '</small></span><textarea class="widefat" type="text" id="' . $this->get_field_id( 'widget_text' ) . '" name="' . $this->get_field_name( 'widget_text' ) . '" rows="8">' . htmlspecialchars($instance['widget_text'], ENT_QUOTES) . '</textarea></p>';

		$form_parts['end_div']	= '</div>';

		$form_parts				= apply_filters( 'testimonials_widget_options_form', $form_parts, $this, $instance );

		echo implode( '', $form_parts );
	}
}

?>
