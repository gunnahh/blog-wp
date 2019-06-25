<?php get_header('home'); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
	<h1 class="entry-title text-center"><?php _e( 'SEARCH RESULTS', 'tdblog' ); ?><?php printf( __( '<label>%s</label>', 'tdblog' ), get_search_query() ); ?></h1>
</header>

<div class="row categories-masonry-container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
</div>
	<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div class="row">
	    <nav class="load_more col-xs-12 text-center">
	      <?php next_posts_link(__( 'MORE POSTS', 'tdblog')); ?>
	    </nav>
	</div>
	<script type="text/javascript">
		(function(){
			$('.load_more a').live('click', function(e){
				e.preventDefault();
				var link = $(this).attr('href');
				$('.load_more').html('<span class="loader">Loading More Posts...</span>');
				$.get(link, function(data) {
					var post = $("#posts .post ", data);
					$('#posts').append(post);
				});
				$('.load_more').load(link+' .load_more a');
			});
		});
	</script>
	<?php endif;  ?>

<!-- <?php get_template_part( 'nav', 'below' ); ?> -->
<?php else : ?>
<article id="post-0" class="post no-results not-found">
	<header class="header">
		<h1 class="entry-title text-center"><?php _e( 'SEARCH RESULTS', 'tdblog' ); ?><?php printf( __( '<label>%s</label>', 'tdblog' ), get_search_query() ); ?></h1>
	</header>
	<section class="entry-content">
		<p class="text-center"><?php _e( 'No articles found', 'tdblog' ); ?></p>
<!-- 		<?php get_search_form(); ?> -->
	</section>
</article>
<?php endif; ?>
</section>
<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>