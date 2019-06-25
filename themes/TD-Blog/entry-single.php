<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header>
	<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><?php the_title();?><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link(); ?>
<!-- 	<?php if ( !is_search() ) get_template_part( 'entry', 'meta' ); ?> -->
	</header>
	<div class="row card-footer">
		<div class="col-sm-3 col-xs-12">
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
		<div class="col-sm-9 col-xs-12">
			<ul class="nav nav-pills comment-list pull-left">
				<li class="comment-total">
		    		<a href="<?php comments_link(); ?>">
			    		<i class="icon icon-comment"></i> 
						<span class="comment-numbers"><?php comments_number( '0', '1', '%' ); ?></span>
			    	</a>
			    </li>
			</ul>
		</div>						
	</div>
	<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>
<section class="more-article">
	<div class="row">
		<div class="col-xs-12"><h4 class="text-left"><?php _e( 'MORE BUSINESS ARTICLES', 'tdblog' ); ?></h4></div>
		<div class="col-xs-12">
			<ul class="nav nav-pills">
				<?php
				// Default arguments
				$args = array(
					'posts_per_page' => 4, // How many items to display
					'post__not_in'   => array( get_the_ID() ), // Exclude current post
					'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
				);
				
				// Check for current post category and add tax_query to the query arguments
				$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
				$cats_ids = array();  
				foreach( $cats as $wpex_related_cat ) {
					$cats_ids[] = $wpex_related_cat->term_id; 
				}
				if ( ! empty( $cats_ids ) ) {
					$args['category__in'] = $cats_ids;
				}
				
				// Query posts
				$wpex_query = new wp_query( $args );
				
				// Loop through posts
				foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
					
					<li>
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a>
					</li>
				
				<?php
				// End loop
				endforeach;
				
				// Reset post data
				wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
</section>

