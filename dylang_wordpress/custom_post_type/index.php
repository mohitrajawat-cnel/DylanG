<?php
/**
* Plugin Name: Custom Post Type Office
* Plugin URI: https://www.your-site.com/
* Description: Test.
* Version: 0.1
* Author: Hire Wordpress Expert
* Author URI: https://www.your-site.com/
**/

// function that runs when shortcode is called
function custom_office_show_fundsfsd() {

	ob_start();
	include("custom_post_show_hwe.php");
	$content = ob_get_contents();
	ob_end_clean();
	return $content;
	

}
// register shortcode
add_shortcode('custom_office_show_hwe','custom_office_show_fundsfsd');
function cptui_register_my_cpts_office() {

	$labels = [
		"name" => esc_html__( "Office", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Office", "custom-post-type-ui" ),
		"menu_name" => esc_html__( "Office", "custom-post-type-ui" ),
		"add_new" => esc_html__( "Add New Office", "custom-post-type-ui" ),
	];

	$args = [
		"label" => esc_html__( "Office", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "Office", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "Office", $args );
}
add_action( 'init', 'cptui_register_my_cpts_office' );
