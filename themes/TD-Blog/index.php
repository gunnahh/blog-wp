<?php get_header('home'); ?>
<section id="content" role="main">
	<div class="row masonry-container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry-home' ); ?>
		<?php endwhile; ?>
		</div>
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<div class="row">
			    <nav class="load_more col-xs-12 text-center">
			      <?php next_posts_link( 'MORE POSTS' ); ?>
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
	</div>
</section>
<?php
    $lang = get_locale();
    $langArray = icl_get_languages('skip_missing=0');
?>
<section class="light-blue-bg">
	<div class="vdo-demo">
		<h4 class="text-center"><?php _e( 'WHAT CAN YOU DO WITH TIME DOCTOR?', 'tdblog' ); ?></h4>
		<p class="text-center">
			<?php _e( 'With Time Doctor&sbquo; you can track your team&#44;s time&sbquo; track individual tasks&sbquo; and bill clients for tracked work hours.', 'tdblog' ); ?>
		</p>
		<div class="container text-center">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-xs-12">
					<div class="embed-container">
						<?php if ($lang == "ru_RU") { ?>
							<iframe id="videoIframe" src="//www.youtube.com/embed/WNXOttAW9dg" frameborder="0" allowfullscreen></iframe>
						<?php }else { ?>
							<iframe id="videoIframe" src="//www.youtube.com/embed/NzL_DYRMI6g" frameborder="0" allowfullscreen></iframe>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<p class="text-center"><?php _e( 'Our time tracking software increases workplace productivity by up to 22&#37;', 'tdblog' ); ?></p>
		<p class="text-center">
			<a href="https://www.timedoctor.com/" class="btn btn-primary"><?php _e( 'TRY IT NOW', 'tdblog' ); ?> <i class="icon icon-arrow-right"></i></a>
		</p>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>