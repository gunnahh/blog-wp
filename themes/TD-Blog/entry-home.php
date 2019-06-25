<div id="post-<?php the_ID(); ?>" <?php post_class( 'col-lg-4 col-md-6 col-sm-6 col-xs-12 card' ); ?>>
	<div class="thumbnail">
        <?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive"/>
			</a>
		<?php endif; ?>
        <div class="caption">
        	<h3>
                <a href="<?php the_permalink(); ?>">
                    <?php echo wp_trim_words(get_the_title(), 10, '...' );?>
                </a>
            </h3>
			<p><?php the_excerpt(); ?></p>
    	</div>
    	<div class="row card-footer">
			<div class="col-sm-7 col-xs-8">
				<div class="media">
			    	<div class="media-left">
				    	<i class="icon icon-<?php foreach((get_the_category()) as $category) { echo $category->slug . '';} ?>"></i>
			    	</div>
					<div class="media-body">
				     	<label class="media-heading"><?php _e( '', 'td-blog' ); ?><?php the_category( ', ' ); ?></label>
					 	<p><?php the_time( get_option( 'date_format' ) ); ?></p>
			    	</div>
				</div>
			</div>
			<div class="col-sm-5 col-xs-4">
				<ul class="nav nav-pills comment-list pull-right">
					<?php $comment_count = get_comment_count($post->ID); if ( comments_open() && $comment_count['total_comments'] > 0 ) : ?>
			    		<li class="count-<?php comments_number( '0', '1', '%' ); ?> comment-total">
				    		<a href="<?php comments_link(); ?>">
					    		<i class="icon icon-comment"></i> 
								<span class="comment-numbers"><?php comments_number( '0', '1', '%' ); ?></span>
					    	</a>
			    		</li>
				    <?php endif; ?>
				</ul>
			</div>
      	</div>
    </div>
</div>