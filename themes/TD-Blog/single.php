<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry-single' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<!-- <?php if ( ! post_password_required() ) echo '<a name="fb-comments"></a>' . do_shortcode('[fbcomments]'); ?> -->
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>