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
<!-- 	    	<li><a href="#"><span>5 Shares</span></a></li> -->
		</ul>
	</div>						
</div>