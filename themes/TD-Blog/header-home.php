<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
		<!--[if lt IE 9]>
	        <script src=“asstes/js/html5shiv.min.js” type=“text/javascript”></script>
	        <script src=“asstes/js/respond.min.js” type=“text/javascript”></script>
	    <![endif]-->
<!-- 	    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5937c1934d0c3c00119ed42c&product=sticky-share-buttons' async='async'></script> -->
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
					<a href="https://www.timedoctor.com/"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/td-logo-white.svg" width="146" alt="Time Doctor"></a>
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
		<h1 class="text-center"><?php _e( 'Time Doctor Blog', 'tdblog' ); ?></h1>
		<h2 class="text-center"><?php _e( 'Reinvent how your business works through virtual teams', 'tdblog' ); ?></h2>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="panel-bar">
			<div class="col-sm-9 col-xs-6">
			<nav class="hidden-xs">
				<ul class="nav nav-pills page-nav">
						<?php if ($lang == "es_ES") { ?>
						 
						 	<li class="active">
								<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
							</li>
							<?php wp_list_categories(array(
							        'orderby'    => $category_id,
							        'include'    => array(375,379,383),
							        'title_li' => ''
							    )); 
							?> 
							
						<?php } elseif ($lang == "ru_RU") { ?>
						 
						 	<li class="active">
								<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
							</li>
							<?php
								wp_list_categories(array('include'=>array(373,371),'title_li' => ''));
								wp_list_categories(array('include'=>'369','title_li' => ''));
							?>
							
						<?php } elseif ($lang == "pt_BR") { ?>
						 
					 	<li class="active">
							<a href="<?php echo home_url(); ?>"><?php _e( 'MOST RECENT', 'tdblog' ); ?></a>
						</li>
						<?php wp_list_categories(array(
						        'orderby'    => $category_id,
						        'include'    => array(377,381,385),
						        'title_li' => ''
						    )); 
						?>
						
						<?php }else { ?>
							<li class="active">
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
			  	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php _e( 'MOST RECENT', 'tdblog' ); ?><span class="caret"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					<?php if ($lang == "es_ES") { ?>
<!-- 						<li><a href="<?php echo icl_get_home_url(); ?>category/productividad/"><?php _e( 'Productivity', 'tdblog' ); ?></a></li> -->
						<li><a href="<?php echo icl_get_home_url(); ?>category/es-product/"><?php _e( 'Product', 'tdblog' ); ?></a></li>
						<li><a href="<?php echo icl_get_home_url(); ?>category/es-business/"><?php _e( 'Business', 'tdblog' ); ?></a></li>
						
					<?php } elseif ($lang == "ru_RU") { ?>
<!-- 						<li><a href="<?php echo icl_get_home_url(); ?>category/производительность/"><?php _e( 'Productivity', 'tdblog' ); ?></a></li> -->
						<li><a href="<?php echo icl_get_home_url(); ?>category/ru-product/"><?php _e( 'Product', 'tdblog' ); ?></a></li>
						<li><a href="<?php echo icl_get_home_url(); ?>category/ru-business/"><?php _e( 'Business', 'tdblog' ); ?></a></li>
							
					<?php } elseif ($lang == "pt_BR") { ?>
<!-- 						<li><a href="<?php echo icl_get_home_url(); ?>category/produtividade/"><?php _e( 'Productivity', 'tdblog' ); ?></a></li> -->
						<li><a href="<?php echo icl_get_home_url(); ?>category/pt-product/"><?php _e( 'Product', 'tdblog' ); ?></a></li>
						<li><a href="<?php echo icl_get_home_url(); ?>category/pt-business/"><?php _e( 'Business', 'tdblog' ); ?></a></li>
						
					<?php }else { ?>
						<li><a href="<?php echo icl_get_home_url(); ?>category/productivity/"><?php _e( 'Productivity', 'tdblog' ); ?></a></li>
						<li><a href="<?php echo icl_get_home_url(); ?>category/product/"><?php _e( 'Product', 'tdblog' ); ?></a></li>
						<li><a href="<?php echo icl_get_home_url(); ?>category/business/"><?php _e( 'Business', 'tdblog' ); ?></a></li>
					<?php } ?>
					
				  </ul>
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