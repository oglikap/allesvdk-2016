<?php
/*
Template Name: News Page
*/
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <ul class="news-main">

    <?php query_posts('post_type=post&post_status=publish&posts_per_page=12&paged='. get_query_var('paged')); ?>

  <?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>

    <?php while ( have_posts() ) : the_post(); ?>



        <li class="news-excerpt">
          <div id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(200,220) ); ?></a>

              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <span class="meta"><?php get_the_post_thumbnail() ; ?>
              <strong><?php the_time('jS F, Y'); ?></strong> / <strong><?php
              the_author_link(); ?></strong><!-- / <span class="comments"><//?php
              comments_popup_link(__('0 comments','example'),__('1 comment','example'),__('%
              comments','example')); ?></span>--></span>

              <?php the_excerpt(__('Continue reading »','example')); ?>
          </div><!-- /#post-<?php get_the_ID(); ?> -->
        </li>

    <?php endwhile; ?>

    <div class="navigation">
      <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    </div><!-- /.navigation -->
    <?php// radiate_paging_nav(); ?>

  <?php else : ?>

    <?php get_template_part( 'content', 'none' ); ?>

  <?php endif; wp_reset_query(); ?>
    </ul>
  </main><!-- #main -->
</div><!-- #primary -->

<?php// get_sidebar(); ?>
