<?php get_header(); ?>
<?php
    $lang = get_locale();
    $langArray = icl_get_languages('skip_missing=0');
?>
<section id="content" role="main">
	<div class="page-not-found-container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-extra-small.svg">
                <?php if ($lang == "es_ES") { ?>
					<h1>Time out!<br>Page is not found</h1>
	                <p>The page you requested does not exist or has expired.</p>
	                <p>You wasted enough time here. It’s time to <a href="#" onclick="history.back(-1); return false;">go back</a> or start over from the <a href="<?php echo home_url(); ?>">blog page</a>.
	                </p>
					
				<?php } elseif ($lang == "ru_RU") { ?>
				 	<h1>Тайм-аут!<br>Страница не обнаружена  или более недоступна.</h1>
	                <p>Данная страница не существует или удалена с блога.</p>
	                <p>После минутки отдыха можно <a href="#" onclick="history.go(-1)">вернуться</a> назад или с новыми силами начать с <a href="<?php echo home_url(); ?>">Блог</a>.</p>
					
				<?php } elseif ($lang == "pt_BR") { ?>
				 	
				 	<h1>Time out!<br>Page is not found</h1>
	                <p>The page you requested does not exist or has expired.</p>
	                <p>You wasted enough time here. It’s time to <a href="#" onclick="history.back(-1); return false;">go back</a> or start over from the <a href="<?php echo home_url(); ?>">blog page</a>.
	                </p>
			 	
				
				<?php }else { ?>
					<h1>Time out!<br>Page is not found</h1>
	                <p>The page you requested does not exist or has expired.</p>
	                <p>You wasted enough time here. It’s time to <a href="#" onclick="history.back(-1); return false;">go back</a> or start over from the <a href="<?php echo home_url(); ?>">blog page</a>.
	                </p>
					
				<?php } ?>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 img-banner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/not-found-404.png">
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>