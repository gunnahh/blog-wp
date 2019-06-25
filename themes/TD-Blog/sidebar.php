<aside id="sidebar" role="complementary" class="best-td">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
				<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
				<div id="primary" class="widget-area">
					<ul class="list-unstyled">
						<?php dynamic_sidebar( 'primary-widget-area' ); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<?php endif; ?>
</aside>