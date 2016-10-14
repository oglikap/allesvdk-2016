<p class="input-text-wrap">
	<label><?php _e('Width', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['width'])) $width = $allslidesetting['width']; else $width = "100%"; ?>
	<input type="text" name="width" id="width" value="<?php echo $width; ?>"><br>
	<?php _e('Set slider width in pixels or percents like 300px / 600px / 800px OR 25% / 50% / 100% ', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Height', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['height'])) $height = $allslidesetting['height']; else $height = ""; ?>
	<input type="text" name="height" id="height" value="<?php echo $height; ?>"><br>
	<?php _e('Set slider height in pixels or percents like 300px / 600px / 800px OR 25% / 50% / 100% ', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Navigation Style', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['nav-style'])) $navstyle = $allslidesetting['nav-style']; else $navstyle = "dots"; ?>
	<input type="radio" name="nav-style" id="nav-style" value="dots" <?php if($navstyle == "dots") echo "checked=checked"; ?>>&nbsp;<?php _e('Dots', rsg_txt_dm); ?><br>
	<input type="radio" name="nav-style" id="nav-style" value="false" <?php if($navstyle == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('None', rsg_txt_dm); ?><br>
	<?php _e('Set a navigation style like dots / thumbnails / none', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Navigation Width', rsg_txt_dm); ?></label><br>
	<input type="text" name="nav-width" id="nav-width" value="<?php if(isset($allslidesetting['nav-width']) && $allslidesetting['nav-width'] != "") echo $allslidesetting['nav-width']; ?>"><br>
	<?php _e('Set naviagetion width in pixels or percents', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Full Screen Slider', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['fullscreen'])) $fullscreen = $allslidesetting['fullscreen']; else $fullscreen = "true"; ?>
	<input type="radio" name="fullscreen" id="fullscreen" value="true" <?php if($fullscreen == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('True', rsg_txt_dm); ?><br>
	<input type="radio" name="fullscreen" id="fullscreen" value="false" <?php if($fullscreen == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('False', rsg_txt_dm); ?><br>
	<?php _e('Set full screen view of slider like True / False / Native. ', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Fit Slides', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['fit-slides'])) $fitslides = $allslidesetting['fit-slides']; else $fitslides = "cover"; ?>
	<input type="radio" name="fit-slides" id="fit-slides" value="cover" <?php if($fitslides == "cover") echo "checked=checked"; ?>>&nbsp;<?php _e('Cover', rsg_txt_dm); ?><br>
	<input type="radio" name="fit-slides" id="fit-slides" value="none" <?php if($fitslides == "none") echo "checked=checked"; ?>><?php _e('None', rsg_txt_dm); ?><br>
	<?php _e('Set how to fit slides into slider frame', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Transition Effect Duration', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['transition-duration'])) $transitionduration = $allslidesetting['transition-duration']; else $transitionduration = "300"; ?>
	<input type="text" name="transition-duration" id="transition-duration" value="<?php echo $transitionduration; ?>"><br>
	<?php _e('Set transition effect duration in mili seconds between slides like 50 / 100 / 250 / 500', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Slider Text', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['slide-text'])) $slidetext = $allslidesetting['slide-text']; else $slidetext = "false"; ?>
	<input type="radio" name="slide-text" id="slide-text" value="true" <?php if($slidetext == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Yes', rsg_txt_dm); ?><br>
	<input type="radio" name="slide-text" id="slide-text" value="false" <?php if($slidetext == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('No', rsg_txt_dm); ?><br>
	<?php _e('Set slider text visibility on slider', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Auto Play', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['autoplay'])) $autoplay = $allslidesetting['autoplay']; else $autoplay = "true"; ?>
	<input type="radio" name="autoplay" id="autoplay" value="true" <?php if($autoplay == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Yes', rsg_txt_dm); ?><br>
	<input type="radio" name="autoplay" id="autoplay" value="false" <?php if($autoplay == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('No', rsg_txt_dm); ?><br>
	<?php _e('Set auto play to slides automatically', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Loop', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['loop'])) $loop = $allslidesetting['loop']; else $loop = "true"; ?>
	<input type="radio" name="loop" id="loop" value="true" <?php if($loop == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Yes', rsg_txt_dm); ?><br>
	<input type="radio" name="loop" id="loop" value="false" <?php if($loop == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('No', rsg_txt_dm); ?><br>
	<?php _e('Set loop to slides continiously', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Navigation Arrow', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['nav-arrow'])) $navarrow = $allslidesetting['nav-arrow']; else $navarrow = "true"; ?>
	<input type="radio" name="nav-arrow" id="nav-arrow" value="true" <?php if($navarrow == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Show', rsg_txt_dm); ?><br>
	<input type="radio" name="nav-arrow" id="nav-arrow" value="false" <?php if($navarrow == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('Hide', rsg_txt_dm); ?><br>
	<?php _e('Set navigation arrow display options', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Touch Slide', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['touch-slide'])) $touchslide = $allslidesetting['touch-slide']; else $touchslide = "true"; ?>
	<input type="radio" name="touch-slide" id="touch-slide" value="true" <?php if($touchslide == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Yes', rsg_txt_dm); ?><br>
	<input type="radio" name="touch-slide" id="touch-slide" value="false" <?php if($touchslide == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('No', rsg_txt_dm); ?><br>
	<?php _e('Set touch slide to slide images using mouse touch or swipe action', rsg_txt_dm); ?>
</p>

<p class="input-text-wrap">
	<label><?php _e('Slide Loading Spinner', rsg_txt_dm); ?></label><br>
	<?php if(isset($allslidesetting['spinner'])) $spinner = $allslidesetting['spinner']; else $spinner = "true"; ?>
	<input type="radio" name="spinner" id="spinner" value="true" <?php if($spinner == "true") echo "checked=checked"; ?>>&nbsp;<?php _e('Yes', rsg_txt_dm); ?><br>
	<input type="radio" name="spinner" id="spinner" value="false" <?php if($spinner == "false") echo "checked=checked"; ?>>&nbsp;<?php _e('No', rsg_txt_dm); ?><br>
	<?php _e('Set loading spinner option to show spinner while loading slides', rsg_txt_dm); ?>
</p>

<input type="hidden" name="awl-save-settings" id="awl-save-settings" value="save-settings">

<hr>
<h1><?php _e('Get Slider Shortcode', rsg_txt_dm); ?></h1>
<p class="input-text-wrap">
	<?php _e('Copy & Embed below shotcode into any Page / Post / Text Widget to preview your slider gallery on site.', rsg_txt_dm); ?><br>
	<input type="text" name="shortcode" id="shortcode" value="<?php echo "[responsive-slider id=".$post->ID."]"; ?>" readonly style="height: 35px !important;"><br><br>
</p>

<p class="">
	<a href="http://demo.awplife.com/responsive-slider-gallery-premium/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Check Premium Version Live Demo</a>
	<a href="http://demo.awplife.com/responsive-slider-gallery-premium-admin/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Try Premium Version Admin Demo</a>
	<a href="http://awplife.com/product/responsive-slider-gallery-premium/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize">Buy Premium Version</a>
</p>
