<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<!-- Facebook Open Graph Tags -->
<!-- 		<meta property="fb:app_id" content="1941788609411653"/> -->
		<!-- End Facebook Open Graph Tags -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
		<!--[if lt IE 9]>
	        <script src=“asstes/js/html5shiv.min.js” type=“text/javascript”></script>
	        <script src=“asstes/js/respond.min.js” type=“text/javascript”></script>
	    <![endif]-->
	    <!-- TrustBox script -->
		<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
		<!-- End Trustbox script -->
	    <?php wp_head(); ?>
	    
	    
	</head>


<body <?php body_class(); ?>>
<script>
dataLayer = [
{ "siteType":"biz30.timedoctor.com" }
];
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKC4TQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WKC4TQ');</script>
<!-- End Google Tag Manager -->

<!-- Facebook JavaScript SDK -->
<!--
	<div id="fb-root"></div>
	<script src="http://connect.facebook.net/en_US/all.js"></script>
	<script>
	  FB.init({
	    appId  : '1941788609411653',
	    status : true, // check login status
	    cookie : true, // enable cookies to allow the server to access the session
	    xfbml  : true, // parse XFBML
	    oauth  : true // enable OAuth 2.0
	  });
	</script>
-->
<!-- Facebook JavaScript SDK -->
<?php
    $lang = get_locale();
    $langArray = icl_get_languages('skip_missing=0');
?>
<div id="wrapper" class="<?php echo $lang; ?>">
<header class="main-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-6">
				<div class="brand">
					<a href="https://www.timedoctor.com/">
						<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/td-logo-white.svg" width="146" alt="Time Doctor">
						<img  src="<?php echo get_template_directory_uri(); ?>/assets/images/td-logo-dark.svg" width="146" class="hide" alt="Time Doctor ">
					</a>
				</div>
			</div>
			<div class="col-sm-8 col-xs-6">
				<div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#td-navbar-collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
				<nav class="collapse navbar-collapse pull-right" id="td-navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="https://www.timedoctor.com/features.html"><?php _e( 'FEATURES', 'tdblog' ); ?></a></li>
						<li><a href="https://www.timedoctor.com/pricing_plans.html"><?php _e( 'PRICING', 'tdblog' ); ?></a></li>
						<li class="active"><a href="<?php echo home_url(); ?>"><?php _e( 'BLOG', 'tdblog' ); ?></a></li>
						<li><a href="https://login.timedoctor.com/v2/login.php"><?php _e( 'SIGN IN', 'tdblog' ); ?></a></li>
						<li><a href="https://www.timedoctor.com"><?php _e( 'SIGN UP', 'tdblog' ); ?></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<?php echo category_description( $category_id ); ?>
<!--
		<h1 class="text-center"><?php _e( '', 'td-blog' ); ?><?php single_cat_title(); ?></h1>
		<h1 class="text-center category-title-head2 hide">Productivity and efficiency </h1>
		<h1 class="text-center category-title-head hide"><?php echo category_description( $category_id ); ?></h1>
		<h2 class="text-center"><?php echo category_description( $category_id ); ?> </h2>
-->
	</div>
	<!--
	<section id="branding">
		<div id="site-title">
			<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
		</div>
		<div id="site-description"><?php bloginfo( 'description' ); ?></div>
	</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
-->
</header>
<div class="container">
	<div class="row">
		<div class="panel-bar">
			<div class="col-sm-9 col-xs-6">
			<nav class="hidden-xs">
				<ul class="nav nav-pills page-nav">
					<?php if ($lang == "es_ES") { ?>
					 
					 	<li>
							<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
						<?php wp_list_categories(array(
						        'orderby'    => $category_id,
						        'include'    => array(375,379,383),
						        'title_li' => ''
						    )); 
						?>
					
					<?php } elseif ($lang == "ru_RU") { ?>
						 
					 	<li>
							<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
						<?php
							wp_list_categories(array('include'=>array(373,371),'title_li' => ''));
							wp_list_categories(array('include'=>'369','title_li' => ''));
						?>
						
					<?php } elseif ($lang == "pt_BR") { ?>
						 
					 	<li>
							<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
						<?php wp_list_categories(array(
						        'orderby'    => $category_id,
						        'include'    => array(377,381,385),
						        'title_li' => ''
						    )); 
						?>
						
					  <?php }else { ?>
						 <li>
							<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
						<?php wp_list_categories(array(
						        'orderby'    => $category_id,
						        'include'    => array(362,364,366),
						        'title_li' => ''
						    )); 
						?> 
					  <?php } ?>
				</ul>
			</nav>
			<div class="dropdown visible-xs">
			  	<?php if ($lang == "es_ES") { ?>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('es-productivity'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Productivity', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('es-product'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Product', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('es-business'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Business', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo icl_get_home_url(); ?>">
							<?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
<!--
						<li class="<?php if((in_category('productividad'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/productividad/"><?php _e( 'Productivity', 'tdblog' ); ?></a>
						</li>
-->
						<li class="<?php if((in_category('es-product'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/es-product/"><?php _e( 'Product', 'tdblog' ); ?></a>
						</li>
						<li class="<?php if((in_category('es-business'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/es-business/"><?php _e( 'Business', 'tdblog' ); ?></a>
						</li>
					</ul>
					
				<?php } elseif ($lang == "ru_RU") { ?>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('ru-productivity'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Productivity', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('ru-product'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Product', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('ru-business'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Business', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo icl_get_home_url(); ?>">
							<?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
<!--
						<li class="<?php if((in_category('производительность'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/производительность/"><?php _e( 'Productivity', 'tdblog' ); ?></a>
						</li>
-->
						<li class="<?php if((in_category('ru-product'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/ru-product/"><?php _e( 'Product', 'tdblog' ); ?></a>
						</li>
						<li class="<?php if((in_category('ru-business'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/ru-business/"><?php _e( 'Business', 'tdblog' ); ?></a>
						</li>
					</ul>
						
				<?php } elseif ($lang == "pt_BR") { ?>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('pt-productivity'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Productivity', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('pt-product'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Product', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('pt-business'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Business', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo icl_get_home_url(); ?>">
							<?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
<!--
						<li class="<?php if((in_category('produtividade'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/produtividade/"><?php _e( 'Productivity', 'tdblog' ); ?></a>
						</li>
-->
						<li class="<?php if((in_category('pt-product'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/pt-product/"><?php _e( 'Product', 'tdblog' ); ?></a>
						</li>
						<li class="<?php if((in_category('pt-business'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/pt-business/"><?php _e( 'Business', 'tdblog' ); ?></a>
						</li>
					</ul>
					
				<?php }else { ?>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('productivity'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Productivity', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('product'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Product', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<button class="btn btn-default dropdown-toggle <?php if(!(in_category('business'))) {?>  hide <?php }?>" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'Business', 'tdblog' ); ?><span class="caret"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li><a href="<?php echo icl_get_home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a></li>
						<li class="<?php if((in_category('productivity'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/productivity/"><?php _e( 'Productivity', 'tdblog' ); ?></a>
						</li>
						<li class="<?php if((in_category('product'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/product/"><?php _e( 'Product', 'tdblog' ); ?></a>
						</li>
						<li class="<?php if((in_category('business'))) {?>  hide <?php }?>">
							<a href="<?php echo icl_get_home_url(); ?>category/business/"><?php _e( 'Business', 'tdblog' ); ?></a>
						</li>
					</ul>
				<?php } ?>
			</div>
		</div>
			<div class="col-sm-3 col-xs-6">
			<ul class="nav nav-pills social-nav">
				<li class="hidden-sm hidden-xs">
					<i class="icon icon-search"></i>
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo icl_get_home_url(); ?>">
						<input type="text" class="form-control search-lg" placeholder="<?php _e( 'Search', 'tdblog' ); ?>…" value="" name="s" id="s">
					</form>
				</li>
			</ul>
		</div>
		</div>
	</div>
	<div class="row visible-sm visible-xs">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo icl_get_home_url(); ?>">
			<input type="text" class="form-control search-input" placeholder="<?php _e( 'Search', 'tdblog' ); ?>…" value="" name="s" id="s">
		</form>
	</div>
