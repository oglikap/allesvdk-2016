<?php
/**
 * Radiate-Child functions and definitions
 *
 * @package ThemeGrill
 * @subpackage Radiate-Child
 * @since Radiate 1.0
 */

 function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

 function create_custom_post_types() {
 		register_post_type( 'groups',
 				array(
 						'labels' => array(
 								'name' => __( 'Groups' ),
 								'singular_name' => __( 'Group' )
 						),
 						'public' => true,
 						'has_archive' => true,
 						'rewrite' => array( 'slug' => 'groups' ),
 				)
 		);
 	 }
 	 add_action( 'init', 'create_custom_post_types' );
