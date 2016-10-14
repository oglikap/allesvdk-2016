<?php
/**
 * @package Responsive Slider Gallery
 */
/*
Plugin Name: Responsive Slider Gallery
Plugin URI: http://awplife.com/product/responsive-slider-gallery-premium/
Description: A Responsive Simple Beautiful Easy Powerful CSS & JS Based WordPress Image Slider Gallery Plugin [standard]
Version: 0.3.0
Author: A WP Life
Author URI: http://awplife.com/product/responsive-slider-gallery-premium/
License: GPLv2 or later
Text Domain: rsg_txt_dm

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( ! class_exists( 'Responsive_Slider_Gallery' ) ) {

	class Responsive_Slider_Gallery {
		
		protected $protected_plugin_api;
		protected $ajax_plugin_nonce;
		
		public function __construct() {
			$this->_constants();
			$this->_hooks();
		}
		
		protected function _constants() {
			/**
			 * Plugin Version
			 */
			define( 'RSG_PLUGIN_VER', '0.2.9' );
			
			/**
			 * Plugin Text Domain
			 */
			define("rsg_txt_dm","responsive-slider-gallery" );

			/**
			 * Plugin Name
			 */
			define( 'RSG_PLUGIN_NAME', __( 'Responsive Slider Gallery', 'rsg_txt_dm' ) );

			/**
			 * Plugin Slug
			 */
			define( 'RSG_PLUGIN_SLUG', 'responsive_slider' );

			/**
			 * Plugin Directory Path
			 */
			define( 'RSG_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

			/**
			 * Plugin Directory URL
			 */
			define( 'RSG_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

			/**
			 * Create a key for the .htaccess secure download link.
			 *
			 * @uses    NONCE_KEY     Defined in the WP root config.php
			 */
			define( 'EWPT_SECURE_KEY', md5( NONCE_KEY ) );
			
		} // end of constructor function
		
		
		/**
		 * Setup the default filters and actions
		 * @uses      add_action()  To add various actions
		 * @access    private
		 * @return    void
		 */
		protected function _hooks() {			
			/**
			 * Load text domain
			 */
			add_action( 'plugins_loaded', array( $this, '_load_textdomain' ) );
			
			/**
			 * add gallery menu item, change menu filter for multisite
			 */
			add_action( 'admin_menu', array( $this, '_rsgallery_menu' ), 101 );
			
			/**
			 * Create Responsive Slider Gallery Custom Post
			 */
			add_action( 'init', array( $this, '_Responsive_Slider_Gallery' ));
			
			/**
		     * Add meta box to custom post
		     */
			 add_action( 'add_meta_boxes', array( $this, '_admin_add_meta_box' ) );
			 
			/**
		     * loaded during admin init 
		     */
			add_action( 'admin_init', array( $this, '_admin_add_meta_box' ) );
			
			add_action('wp_ajax_slide', array(&$this, '_ajax_slide'));
			
			add_action('save_post', array(&$this, '_save_settings'));
			
			/**
		     * Shortcode Compatibility in Text Widgets
		     */
			add_filter('widget_text', 'do_shortcode');

		} // end of hook function		
		
		/**
		 * Loads the text domain.
		 * @return    void
		 * @access    private
		 */
		public function _load_textdomain() {
			load_plugin_textdomain( 'rsg_txt_dm', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		}		
		
		/**
		 * Adds the Gallery menu item
		 * @access    private
		 * @return    void
		 */
		public function _rsgallery_menu() {
			$help_menu = add_submenu_page( 'edit.php?post_type='.RSG_PLUGIN_SLUG, __( 'Docs', 'rsg_txt_dm' ), __( 'Docs', 'rsg_txt_dm' ), 'administrator', 'rsgallery-doc-page', array( $this, '_rsgallery_doc_page') );
		}		
		
		/**
		 * Responsive Slider Gallery Custom Post
		 * Create slider post type in admin dashboard.
		 * @access    private
		 * @return    void      Return custom post type.
		 */
		public function _Responsive_Slider_Gallery() {
			$labels = array(
				'name'                => _x( 'Responsive Slider Galleies', 'Post Type General Name', 'rsg_txt_dm' ),
				'singular_name'       => _x( 'Responsive Slider Gallery', 'Post Type Singular Name', 'rsg_txt_dm' ),
				'menu_name'           => __( 'Responsive Slider Gallery', 'rsg_txt_dm' ),
				'name_admin_bar'      => __( 'Responsive Slider Gallery', 'rsg_txt_dm' ),
				'parent_item_colon'   => __( 'Parent Item:', 'rsg_txt_dm' ),
				'all_items'           => __( 'All Slider Gallery', 'rsg_txt_dm' ),
				'add_new_item'        => __( 'Add Slider Gallery', 'rsg_txt_dm' ),
				'add_new'             => __( 'Add Slider Gallery', 'rsg_txt_dm' ),
				'new_item'            => __( 'New Gallery', 'rsg_txt_dm' ),
				'edit_item'           => __( 'Edit Gallery', 'rsg_txt_dm' ),
				'update_item'         => __( 'Update Gallery', 'rsg_txt_dm' ),
				'search_items'        => __( 'Search Gallery', 'rsg_txt_dm' ),
				'not_found'           => __( 'Gallery Not found', 'rsg_txt_dm' ),
				'not_found_in_trash'  => __( 'Gallery Not found in Trash', 'rsg_txt_dm' ),
			);
			$args = array(
				'label'               => __( 'Responsive Slider Gallery', 'rsg_txt_dm' ),
				'description'         => __( 'Custom Post Type For Responsive Slider Gallery', 'rsg_txt_dm' ),
				'labels'              => $labels,
				'supports'            => array( 'title'),
				'taxonomies'          => array(),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 65,
				'menu_icon'           => 'dashicons-images-alt2',
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,		
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);
			register_post_type( 'responsive_slider', $args );
			
		} // end of post type function
		
		/**
		 * Adds Meta Boxes
		 * @access    private
		 * @return    void
		 */
		public function _admin_add_meta_box() {
			// Syntax: add_meta_box( $id, $title, $callback, $screen, $context, $priority, $callback_args );
			add_meta_box( '', __('Add Image Slides', rsg_txt_dm), array(&$this, 'upload_multiple_images'), 'responsive_slider', 'normal', 'default' );
		}
		
		public function upload_multiple_images($post) { 
			wp_enqueue_script('media-upload');
			wp_enqueue_script('awl-uploader-js', RSG_PLUGIN_URL . 'js/awl-uploader.js', array('jquery'));
			wp_enqueue_style('awl-uploader-css', RSG_PLUGIN_URL . 'css/awl-uploader.css');
			wp_enqueue_media();
			?>
			<div id="slider-gallery">
				<input type="button" id="remove-all-slides" name="remove-all-slides" class="button button-large" rel="" value="<?php _e('Delete All Slide', rsg_txt_dm); ?>">
				<ul id="remove-slides" class="sbox">
				<?php
				$allslidesetting = unserialize(base64_decode(get_post_meta( $post->ID, 'awl_slider_settings_'.$post->ID, true)));
				if(isset($allslidesetting['slide-ids'])) {
				foreach($allslidesetting['slide-ids'] as $id) {
					$thumbnail = wp_get_attachment_image_src($id, 'thumbnail', true);
					$attachment = get_post( $id );
					?>
					<li class="slide">
						<img class="new-slide" src="<?php echo $thumbnail[0]; ?>" alt="">
						<input type="hidden" id="slide-ids[]" name="slide-ids[]" value="<?php echo $id; ?>" />
						<!-- Slide Title-->
						<input type="text" name="slide-title[]" id="slide-title[]" placeholder="Slide Title" readonly value="<?php echo get_the_title($id); ?>">
						<input type="button" name="remove-slide" id="remove-slide" class="button" value="Delete Slide">
					</li>
				<?php } // end of foreach
				} //end of if
				?>
				</ul>
			</div>
			
			<!--Add New Slide Button-->
			<div name="add-new-slider" id="add-new-slider" class="new-slider">
				<div class="menu-icon dashicons dashicons-format-image"></div>
				<div class="add-text"><?php _e('New Slide', rsg_txt_dm); ?></div>
			</div>
			<div style="clear:left;"></div>
			<br>
			<h1><?php _e('Slider Setting', rsg_txt_dm); ?></h1>
			<hr>
			<?php
			require_once('slider-settings.php');
		} // end of upload multiple image
		
		public function _ajax_callback_function($id) {
			//wp_get_attachment_image_src ( int $attachment_id, string|array $size = 'thumbnail', bool $icon = false )
			//thumb, thumbnail, medium, large, post-thumbnail
			$thumb = wp_get_attachment_image_src($id, 'thumb', true);
			$thumbnail = wp_get_attachment_image_src($id, 'thumbnail', true);
			$medium = wp_get_attachment_image_src($id, 'medium', true);
			$large = wp_get_attachment_image_src($id, 'large', true);
			$postthumbnail = wp_get_attachment_image_src($id, 'post-thumbnail', true);
			$attachment = get_post( $id ); // $id = attachment id
			?>
			<li class="slide">
				<img class="new-slide" src="<?php echo $thumbnail[0]; ?>" alt="">
				<input type="hidden" id="slide-ids[]" name="slide-ids[]" value="<?php echo $id; ?>" />
				<input type="text" name="slide-title[]" id="slide-title[]" placeholder="Slide Title" readonly value="<?php echo get_the_title($id); ?>">
				<input type="button" name="remove-slide" id="remove-slide" class="button" value="Delete Slide">
			</li>
			<?php
		}
		
		public function _ajax_slide() {
			echo $this->_ajax_callback_function($_POST['slideId']);
			die;
		}
		
		public function _save_settings($post_id) {
			if ( isset( $_POST['awl-save-settings'] ) == "save-settings" ) {
				$awl_slider_shortcode_setting = "awl_slider_settings_".$post_id;
				update_post_meta($post_id, $awl_slider_shortcode_setting, base64_encode(serialize($_POST)));
			}
		}// end save setting
		
		/**
		 * Responsive Slider Gallery Docs Page
		 * Create doc page to help user to setup plugin
		 * @access    private
		 * @return    void.
		 */
		public function _rsgallery_doc_page() {
			require_once('docs.php');
		}
		
	} // end of class

	/**
	 * Instantiates the Class
	 * @global    object	$rs_gallery_object
	 */
	$rs_gallery_object = new Responsive_Slider_Gallery();
	require_once('shortcode.php');
} // end of if class exists
?>