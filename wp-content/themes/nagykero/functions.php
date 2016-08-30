<?php
	function wp_theme_style(){
		wp_enqueue_style('normalize_css',get_template_directory_uri() . '/css/normalize.css');

		wp_enqueue_style('hamburger_css',get_template_directory_uri().'/css/hamburger.css');

		wp_enqueue_style('google_font','https://fonts.googleapis.com/css?family=Raleway');

		wp_enqueue_style('main_css',get_template_directory_uri() . '/style.css');
	}

	add_action('wp_enqueue_scripts','wp_theme_style');

	function wp_theme_js(){
		wp_enqueue_script('scripts_js',get_template_directory_uri().'/js/scripts.js',array('jquery'),'',false);
	}

	add_action('wp_enqueue_scripts','wp_theme_js');



	?>