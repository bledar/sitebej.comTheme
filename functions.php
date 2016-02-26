<?php

//ky funksion shton ne stilet e faqeve dhe scriptet ne fund te faqes
	function sitbej_script_enqueue(){
		wp_enqueue_style( "main_style", get_template_directory_uri()."/css/main_style.css",array(), "1.0", "all" );
		wp_enqueue_style( "owl_carousel.", get_template_directory_uri()."/css/owl.carousel.css",array(), "1.0", "all" );
		wp_enqueue_style( "owl_theme", get_template_directory_uri()."/css/owl.theme.css",array(), "1.0", "all" );
		wp_enqueue_style( "owl_transition", get_template_directory_uri()."/css/owl.transitions.css",array(), "1.0", "all" );
		wp_enqueue_script("jQuery","https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js",array(),"2.2.0",true);
		wp_enqueue_script("main_script", get_template_directory_uri()."/js/script.js",array(),"1.0",true);
		wp_enqueue_script("owl_script", get_template_directory_uri()."/js/owl.carousel.min.js",array(),"1.0",true);
	}

//kjo komande regjistron funksionin e mesiperm dhe ben ate aktv
	add_action("wp_enqueue_scripts","sitbej_script_enqueue");

//ben aktive menute ne wordpress dhe krijon dy tipe menushe te reja
	function sitebej_theme_setup(){
		add_theme_support("menus" );
		register_nav_menu( "primary","header navigations");
		register_nav_menu( "secondary","footer navigations");
	}
	//inicializon menute nga fuksioni i mesiperm
	add_action( "init", "sitebej_theme_setup");
		function sitebej_widget_setup(){
			register_sidebar(
				array(
						'name'        =>'HomeHeaderNews',
						'id'          =>'HomeHeaderNews',
						'class'       =>'HederNewsSlider',
						'description' =>'Recent news in header home page'
				      )
				);
		}
	//inicializon menute nga fuksioni i mesiperm
	add_action( "widgets_init", "sitebej_widget_setup");


//ben qe per cdo post te kemi ospionin e future images
add_theme_support("post-thumbnails");