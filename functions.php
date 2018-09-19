<?php

/* ---------------------------------------------------------------------------------------------
   THEME SETUP
   --------------------------------------------------------------------------------------------- */



if ( ! function_exists( 'Cocoon_setup' ) ) {

	function Cocoon_setup() {

		// Automatic feed
		add_theme_support( 'automatic-feed-links' );

		// Set content-width
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 600;
		}

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Set post thumbnail size
		set_post_thumbnail_size( 870, 9999 );

		// Custom Image Sizes
		add_image_size( 'Cocoon_fullscreen', 1860, 9999 );

		// Custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 300,
			'width'       => 600,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery' ) );

		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		// Title tag
		add_theme_support( 'title-tag' );

		//add CSS
		add_editor_style('/assets/plugins/bootstrap/css/bootstrap.min.css');
		add_editor_style('/assets/css/essentials.css');
		add_editor_style('/assets/css/layout.css');
		add_editor_style('/assets/css/header-1.css');
		add_editor_style('/assets/css/color_scheme/green.css');

		// Add nav menu
		register_nav_menu( 'primary-menu', __( 'Primary Menu', 'Cocoon' ) );
		register_nav_menu( 'mobile-menu', __( 'Mobile Menu', 'Cocoon' ) );
		register_nav_menu( 'social', __( 'Social Menu', 'Cocoon' ) );

		// Add excerpts to pages
		add_post_type_support( 'page', array( 'excerpt' ) );

		// HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Make the theme translation ready
		load_theme_textdomain( 'Cocoon', get_template_directory() . '/languages' );
		
		
		wp_enqueue_style( 'Cocoon-style', get_template_directory_uri() . '/style.css', $dependencies );

	}
	add_action( 'after_setup_theme', 'Cocoon_setup' );

} // End if().


class Child_Wrap extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}

if(isset($_POST['action']) && $_POST['action'] == 'contact_send') {

		$config = parse_ini_file("mail_config.ini");

		$name = trim($_POST['name']);
    	$email = trim($_POST['email']);
    	$subject = trim($_POST['subject']);
    	$phone = trim($_POST['phone']);
	    $message = trim($_POST['message']);

		$emailTo = $config['emailTo'];
	    
	    $subject = 'Cocoon Spa Website - '.$subject;
	    $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage: $message";
	    $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

	    if(wp_mail($emailTo, $subject, $body, $headers)) {
	    	_redirect('#alert_success');
			exit; 
		} else {
			_redirect('#alert_failed');
		    exit; 
		}
	}

/** ******************************** **
 *	@REDIRECT
		#alert_success 		= email sent
		#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
		#alert_mandatory	= email not sent - required fields empty
 ** ******************************** **/
	function _redirect($hash) {
		
		$HTTP_REFERER = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

		if($HTTP_REFERER === null)
			die("Invalid Referer. Output Message: {$hash}");

		header("Location: {$HTTP_REFERER}{$hash}");
		exit;
	}
