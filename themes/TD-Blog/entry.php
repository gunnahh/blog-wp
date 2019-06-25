<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-6 col-sm-6 col-xs-12 card'); ?>>
<div class="thumbnail">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"/>
		</a>
	<?php endif; ?>
<header>
<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h3 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo wp_trim_words(get_the_title(), 10, '...' );?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h3>'; } ?> <?php edit_post_link(); ?>
</header>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php get_template_part( 'entry-footer' ); ?>
</div>
</article>