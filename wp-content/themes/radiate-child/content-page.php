<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <header class="entry-header">
      <?php if ( is_front_page() ) : ?>
      	<h2 class="entry-title"><?php// the_title(); ?></h2>
      <?php else : ?>
         <h1 class="entry-title"><?php// the_title(); ?></h1>
      <?php endif; ?>
   </header><!-- .entry-header -->

	<div class="entry-content">
    <?php $alinea_1 = get_field("alinea_1");
          $alinea_2 = get_field("alinea_2");
          $alinea_3 = get_field("alinea_3");
          $alinea_4 = get_field("alinea_4");
          $alinea_5 = get_field("alinea_5");
          $playlist_1 = get_field("playlist_1");
          $playlist_2 = get_field("playlist_2");
          $playlist_3 = get_field("playlist_3");
          $playlist_4 = get_field("playlist_4");
          $credits_1 = get_field("credits_1");
          $subheader = get_field("subheader");
          $image_1 = get_field("image_1");
          $modal_1 = get_field("modal1");
          $modal_2 = get_field("modal2");
          $video = get_field("video");
          $size = "large";
    ?>
    <article class="article-content">
      <h3 class="subheader"><?php echo $subheader ?></h3>
      <section class="main-content">
        <?php echo $alinea_1 ?>
        <?php echo $alinea_2 ?>
        <?php echo $video ?>
      </section>
      <section class="side-content">
        <?php echo $playlist_1; ?>
        <figure class="front-image">
          <?php echo wp_get_attachment_image($image_1, $size); ?>
        </figure>
      </section>
      <section class="main-content2">
        <?php echo $alinea_3; ?>
        <?php echo $alinea_4; ?>
        <?php echo $alinea_5; ?>
        <?php echo $modal_1; ?>
        <?php echo $modal_2; ?>
      </section>
      <section class="side-content2">
        <?php echo $playlist_2; ?>
        <?php echo $playlist_3; ?>
      </section>
      <section class="main-content" style="border:none;min-height:10vw;background-color:transparent;">

      </section>
      <section class="side-content">
        <?php echo $playlist_4 ?>
      </section>
    </article>
		<?php// the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'radiate' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'radiate' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
  <section class="credits-block">
    <?php echo $credits_1; ?>
  </section>
</article><!-- #post-## -->
