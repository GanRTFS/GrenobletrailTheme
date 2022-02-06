<?php

function load_css() {

	wp_register_style('grenobletrail', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('grenobletrail');

}
add_action('wp_enqueue_scripts','load_css');