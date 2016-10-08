<?php
/*
Template Name: Group Page
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php query_posts('posts_per_page=3&post_type=groups'); ?>

			<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$alinea1 = get_field("alinea1");
			$alinea2 = get_field("alinea2");
			$alinea3 = get_field("alinea3");
			$alinea4 = get_field("alinea4");
			$alinea1_2 = get_field("alinea1_2");
			$alinea1_3 = get_field("alinea1_3");
			$alinea1_4 = get_field("alinea_1_4");
			$alinea1_5 = get_field("alinea1_5");
			$playlist = get_field("playlist");
//			$title = get_field("title");
			$title2 = get_field("title2");
			$subtitle = get_field("production_title");
			$subtitle2 = get_field("production_title2");
			$playlist = get_field("speellijst");
			$credits = get_field("credits");
			$modal1 = get_field("modal1");
			$modal2 = get_field("modal2");
			$size = "full";
			?>

				<div class="entry-content">
					<div id="entry1">
						<h2><?php the_title(); ?></h2>
						<h4><?php echo $subtitle; ?></h4>
						<h6>A dark remake of an iconic fairytale</h6>
						<p><?php echo $alinea1; ?></p>
						<figure class="image1">
							<?php echo wp_get_attachment_image($image_1, $size); ?>
							<figcaption>Foto &copy; Alwin Poiana</figcaption>
						</figure>
						<p><?php echo $alinea2; ?></p>
						<p><?php echo $alinea3; ?></p>
						<p><?php echo $alinea4; ?></p>
						<?php echo $modal1; ?>
						<?php echo $modal2; ?>
					</div>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
				</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
		<div class="credits-block">
			<p><?php echo $credits; ?></p>
		</div>

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div id="entry1">
					<h2><?php echo $title2; ?></h2>
					<h4><?php echo $subtitle2; ?></h4>
					<article class="intro">
						<p><?php echo $alinea1_2; ?></p>
					</article>
					<article class="article-horror">
						<p><?php echo $alinea1_3; ?></p>
						<p><?php echo $alinea1_4; ?></p>
						<p><?php echo $alinea1_5; ?></p>
					</article>
				</div>
			</main>
		</div>
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
