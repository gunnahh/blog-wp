<?php get_header(); ?>
<section id="content" role="main">
<div class="row categories-masonry-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
<?php endif;  ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>