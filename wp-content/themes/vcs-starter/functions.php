<?php

// Įjungiame post thumbnail

add_theme_support('post-thumbnails');

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

    	//wp_register_script(handle, path, dependency, version, load_in_footer);

        wp_deregister_script('jquery');
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.js', false, false, true);


	// <script src="https://kit.fontawesome.com/d74323aee3.js" crossorigin="anonymous"></script>
	// <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	// <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

	// <script src="assets/scripts/jquery.js"></script>
	// <script src="assets/scripts/jquery.fancybox.min.js"></script>
	// <script src="assets/scripts/owl.carousel.min.js"></script>
	// <script src="assets/scripts/custom.js"></script>
	

		//Registration
		
		wp_register_script('fa', 'https://kit.fontawesome.com/d74323aee3.js', array('jquery'), false, true);
		wp_register_script('jquery-min', 'https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js', array('fa'), false, true);
		wp_register_script('fancybox-vers', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array('jquery-min'), false, true);

		wp_register_script('fancybox-js', THEME_FOLDER . '/assets/scripts/jquery.fancybox.min.js', array('fancybox-vers'), false, true);
		wp_register_script('owl-carousel', THEME_FOLDER . '/assets/scripts/owl.carousel.min.js', array('fancybox-js'), false, true);
		wp_register_script('custom', THEME_FOLDER . '/assets/scripts/custom.js', array('owl-carousel'), false, true);


		//Loading
		wp_enqueue_script('jquery');
		wp_enqueue_script('fa');
		wp_enqueue_script('jquery-min');
		wp_enqueue_script('fancybox-vers');  
		wp_enqueue_script('fancybox-js');
		wp_enqueue_script('owl-carousel');
		wp_enqueue_script('custom');
		
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined('THEME_FOLDER') ) {
		//wp_register_style(handle, path, dependency, version, devices);	


		// <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		// <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		// <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
			// <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css">
		// <link
		// 	href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,700|Roboto+Slab:700|Roboto:300,700&display=swap&subset=latin-ext"
		// 	rel="stylesheet">
		// <link rel="stylesheet" href="assets/css/style.css">


		//Registration
		wp_register_style('owl', THEME_FOLDER . '/assets/css/owl.carousel.min.css', array(), false, 'all');
		wp_register_style('owl-theme', THEME_FOLDER . '/assets/css/owl.theme.default.min.css', array('owl'), false, 'all');
		wp_register_style('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array('owl-theme'), false, 'all');
		wp_register_style('fancybox-css', THEME_FOLDER . '/assets/css/jquery.fancybox.min.css', array('fancybox'), false, 'all');
		wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,700|Roboto+Slab:700|Roboto:300,700&display=swap&subset=latin-ext', array('fancybox-css'), false, 'all');
		wp_register_style('style', THEME_FOLDER . '/assets/css/style.css', array('fonts'), false, 'all');
		
		//Loading
		wp_enqueue_style('owl');
		wp_enqueue_style('owl-theme');
		wp_enqueue_style('fancybox');
		wp_enqueue_style('fancybox-css');
		wp_enqueue_style('fonts');
		wp_enqueue_style('style');

	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
		'primary-navigation' => __( 'Primary Navigation' ),
		'footer-navigation' => __( 'Footer Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

add_image_size('personal_photo', 192, 192, false);
add_image_size('gallery_photo', 190, 190, false);
add_image_size('homepage-posts', 540, 303, true);
add_image_size('portfolio_photo', 263, 175, false);




