<?php 
function hallux_scripts() {
	wp_enqueue_style( 'hallux-style', get_stylesheet_url() );
	wp_enque_script( 'hallux-jquery', get_template_directory_url() , '/js/jquery.js');
	wp_enque_script( "hallux-slider", get_template_directory_url(), '/js/slider.js');
	wp_enque_script( 'hallux-superfish', get_template_directory_url(), '/js/superfish.js');
	wp_enque_script( 'hallux-custom', get_template_directory_url(), '/js/custom.js');
}

add_action ('wp_enque_script' , 'hallux_scripts');

//add wp menu
// this theme uses wp_nav_menu() in one location

register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'hallux'),
	));


//Register Widgets
//Register Sidebar Widget
//

//register widget area

//

function hallux_widgets_init() {
	register_sidebar( array(
		'name'		=> esc_html__('Sidebar', 'hallux' ),
		'id'		=> 'sidebar-1',
		'description' => esc_html__( 'Add widgets here.', 'hallux'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section',
		'before_title' => '< h2 class="widget-title>',
		'after_title' => '</h2>',
		));
}

add_action('widgets_init', 'hallux_widgets_init');