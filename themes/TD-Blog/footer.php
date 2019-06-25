</div>
<footer class="main-footer <?php echo $lang; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 general">
                <h6><?php _e( 'General', 'tdblog' ); ?></h6>
                <div class="mask-header"></div>
                <nav>
                    <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-general-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-general-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-general-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-general', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
                </nav>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 blog">
                <h6><?php _e( 'Blog', 'tdblog' ); ?></h6>
                <div class="mask-header"></div>
                <nav>
                    <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-blog-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-blog-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-blog-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-blog', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
                </nav>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 contact">
                <h6><?php _e( 'Contact', 'tdblog' ); ?></h6>
                <div class="mask-header"></div>
                <nav>
                    <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-contact-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-contact-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-contact-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-contact', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
                </nav>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 about">
                <h6><?php _e( 'About', 'tdblog' ); ?></h6>
                <div class="mask-header"></div>
                <nav>
                    <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-about-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-about-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-about-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-about', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 integrat">
                <h6><?php _e( 'Integrations', 'tdblog' ); ?></h6>
                <div class="mask-header"></div>
                <nav>
                    <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-integrations-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-integrations-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-integrations-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-integrations', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
                </nav>
            </div>
<!--
            <div class="col-md-1 col-lg-1 col-sm-12">
                <div class="language-wrapper">
	                <?php wp_nav_menu( array(
					    'menu' => 'lang-switch'
					));?>
                </div>
            </div>
-->
        </div>
        <hr/>
        <div class="row">
	        <div class="col-md-6 col-sm-8 col-xs-12">
		        <nav class="bottom-nav">
			        <?php if ($lang == "es") { ?>
	                    <?php wp_nav_menu(array(
							'menu' => 'footer-bottom-es', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "ru") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-bottom-ru', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } elseif ($lang == "pt") { ?>
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-bottom-pt', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php }else { ?>	
                    	<?php wp_nav_menu(array(
							'menu' => 'footer-bottom', 
							'container' => false, 
							'menu_id' => '', 
							'menu_class'=>'nav nav-pills' 
							));
						?>
                    <?php } ?>
		        </nav>
		        <div class="language-wrapper">
	                <?php wp_nav_menu( array(
					    'menu' => 'lang-switch'
					));?>
                </div>
	        </div>
	        <div class="col-md-6 col-sm-4 col-xs-12">
		        <nav class="social-icons">
			        <ul class="nav nav-pills pull-right">
						<?php if ($lang == "ru") : ?>
						<li class="vk"><a href="https://vk.com/timedoctor" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri();?>/assets/images/social-vk.png" alt="VK"></a></li>
						<?php endif; ?>
						<li class="tw"><a href="https://twitter.com/manageyourtime" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri();?>/assets/images/social-twitter.png" alt="Twitter"></a></li>
						<li class="fb"><a href="https://www.facebook.com/TimeDoctorSoftware/" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri();?>/assets/images/social-facebook.png" alt="Facebook"></a></li>
			        </ul>
		        </nav>
	        </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/imagesLoaded.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/masonry.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/civem.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/socialcount.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/global.js"></script>

<script type="text/javascript">
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }

    function setCookie(name, value) {
        domain = window.location.hostname;
        domain = domain.split(".");
        domain = ".www." + domain[domain.length - 2] + '.' + domain[domain.length - 1];
        console.log(domain);
        var now = new Date();
        now.setTime(now.getTime() + 6 * 2592000000);
        document.cookie = name + "=" + value + ";path=/;expires=" + now.toUTCString();
    }

    $(document).ready(function() {
        if ($('html').attr('lang') != 'en-US' && $("body").hasClass("home") == true) {
            var oldEnUrl = $(".lang-item-en a").attr("href");
            if (typeof oldEnUrl != undefined) {
                $(".lang-item-en a").attr("href", oldEnUrl + '?lang=en');
            }
        }
    });
</script>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 998467623;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* > */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/998467623/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php wp_footer(); ?>
<script src="//my.hellobar.com/6c89fdb1e51cd57e97646da7c8cd83a12a3c1794.js" type="text/javascript" charset="utf-8" async="async"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45857232 = new Ya.Metrika({
                    id:45857232,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45857232" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
  (function() {
    window.onload = function() {
      /* Change the variables below */
      var sourceCurrencyCode = "USD";
      var targetCurrencyCode = "PHP";
      var sourceAmount = 1000;
      var callToActionLabel = "Get started";
      var hideCta = false;
      var hideDetails = true;
      var lang = "en";
      var theme = "dark";
      var affiliateLink = "https://transferwise.7eer.net/c/189171/230801/3512";
      /* Change the variables above */
      var redirectUrlParams = encodeURIComponent("https://transferwise.com?sourceCurrency="+ sourceCurrencyCode +"&targetCurrency="+ targetCurrencyCode +"&fromCalcWidget=true&sourceAmount="+sourceAmount);
      var redirectUrl = encodeURIComponent(affiliateLink + "?u=" + redirectUrlParams);
      var twIframeUrl = "https://transferwise.com/widget/calculator?sourceCurrencyCode="+sourceCurrencyCode
      +"&targetCurrencyCode="+targetCurrencyCode
      +"&amount="+sourceAmount
      +"&cta="+callToActionLabel
      +"&hideCta="+hideCta
      +"&hideDetails="+hideDetails
      +"&redirectUrl="+redirectUrl
      +"&lang="+lang
      +"&theme="+theme;
      var twIframe = document.createElement('iframe');
      twIframe.frameBorder = 0;
      /* Change the width and height of the iframe accordingly to your needs */
      twIframe.width = "400px";
      twIframe.height = "310px";
      twIframe.id = "tw-calc";
      twIframe.scrolling = "no";
      twIframe.setAttribute("allowtransparency", "true");
      twIframe.setAttribute("src", twIframeUrl);
      document.getElementById("tw-calc-widget").appendChild(twIframe);
    };
  })();
</script>
</body>
</html>
