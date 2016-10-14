<?php
/**
 * Responsive Slider Shortcode
 *
 * @access    public
 *
 * @return    Create Fontend Slider Gallery Output
 */
add_shortcode('responsive-slider', 'responsive_slider_shortcode');
function responsive_slider_shortcode($post_id) {
	wp_enqueue_script('awl-fotorama-js', RSG_PLUGIN_URL .'js/fotorama.min.js', array('jquery'));
	wp_enqueue_style('awl-fotorama-css', RSG_PLUGIN_URL .'css/awl-fotorama.min.css');
	ob_start();
    $allslides = array(  'p' => $post_id['id'], 'post_type' => 'responsive_slider');
    $loop = new WP_Query( $allslides );
	while ( $loop->have_posts() ) : $loop->the_post();
		$post_id = get_the_ID();
		$allslidesetting = unserialize(base64_decode(get_post_meta( $post_id, 'awl_slider_settings_'.$post_id, true)));
		// start the sider contents
		?>
		<div class="fotorama responsive-image-silder"
			<?php if(isset($allslidesetting['width'])) echo 'data-width='.$allslidesetting['width']; else echo 'data-width="100%"'; ?>
			<?php if(isset($allslidesetting['height'])) echo 'data-height="'.$allslidesetting['height'].'"'; else echo 'data-height="100%"';?>
			<?php if(isset($allslidesetting['nav-style']) && $allslidesetting['nav-style']!= "") echo 'data-nav='.$allslidesetting['nav-style']; ?>
			<?php if(isset($allslidesetting['nav-width']) && $allslidesetting['nav-width']!= "") echo 'data-navwidth='.$allslidesetting['nav-width']; ?>
			<?php if(isset($allslidesetting['fullscreen']) && $allslidesetting['fullscreen']!= "") echo 'data-allowfullscreen='.$allslidesetting['fullscreen']; else echo 'data-allowfullscreen="true"'; ?>
			<?php if(isset($allslidesetting['fit-slides']) && $allslidesetting['fit-slides']!= "") echo 'data-fit='.$allslidesetting['fit-slides']; ?>
			<?php if(isset($allslidesetting['transition-duration']) && $allslidesetting['transition-duration']!= "") echo 'data-transitionduration='.$allslidesetting['transition-duration'];?>
			<?php if(isset($allslidesetting['slide-text']) && $allslidesetting['slide-text']!= "") echo $slidetext = $allslidesetting['slide-text']; else $slidetext = 'false'; ?>
			<?php if(isset($allslidesetting['autoplay']) && $allslidesetting['autoplay']!= "") echo 'data-autoplay='.$allslidesetting['autoplay']; else 'data-autoplay="true"';?>
			<?php if(isset($allslidesetting['loop']) && $allslidesetting['loop']!= "") echo 'data-loop='.$allslidesetting['loop']; else 'data-loop="true"';?>
			<?php if(isset($allslidesetting['nav-arrow']) && $allslidesetting['nav-arrow']!= "") echo 'data-arrow='.$allslidesetting['nav-arrow']; ?>
			<?php if(isset($allslidesetting['touch-slide']) && $allslidesetting['touch-slide']!= "") echo 'data-swipe='.$allslidesetting['touch-slide']; ?>
			<?php if(isset($allslidesetting['spinner']) && $allslidesetting['spinner']!= "") echo 'data-spinner='.$allslidesetting['spinner']; ?>
			data-transition="slide"
			>
			<?php
			if(isset($allslidesetting['slide-ids']) && count($allslidesetting['slide-ids']) > 0) {
				foreach($allslidesetting['slide-ids'] as $attachment_id) {
					$thumb = wp_get_attachment_image_src($attachment_id, 'thumb', true);
					$thumbnail = wp_get_attachment_image_src($attachment_id, 'thumbnail', true);
					$medium = wp_get_attachment_image_src($attachment_id, 'medium', true);
					$large = wp_get_attachment_image_src($attachment_id, 'large', true);
					$postthumbnail = wp_get_attachment_image_src($attachment_id, 'post-thumbnail', true);
					
					$attachment_details = get_post( $attachment_id );
						$href = get_permalink( $attachment_details->ID );
						$src = $attachment_details->guid;
						$title = $attachment_details->post_title;
						if($slidetext == 'true') {
							$text = $title;
						} else {
							$text = "";
						}						
					?><img src="<?php echo $thumb[0]; ?>" data-caption="<?php echo $text; ?>"><?php
				}// end of attachment foreach
			} else {
				
				_e('Sorry! No slides added to the slider shortcode yet. Please add few slide into shortcode', rsg_txt_dm);
				echo ": [responsive-slider id=$post_id]";
			} // end of if esle of slides avaialble check into slider
			?>
		</div>
		<?php
	endwhile;
	wp_reset_query();
    return ob_get_clean();
	?>
	<!-- HTML Script Part Start From Here-->
	<script>
	jQuery(function () {
	  jQuery('.responsive-image-silder').fotorama({
		  spinner: {
			lines: 13,
			color: 'rgba(0, 0, 0, .75)',
			className: 'fotorama',
		  }		  
	  });
	});
	</script>
	<?php
}
?>