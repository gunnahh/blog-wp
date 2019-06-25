$(document).ready(function(){
	//var twId = $('.card').attr('id');
	//var twNumb = parseInt(twId);
	//var twNumb = parseInt($('.st_twitter_hcount .stBubble_hcount').text());
	
	

	var $container = $('.masonry-container');
	$container.imagesLoaded( function () {
		$container.masonry({
			columnWidth: '.card',
			itemSelector: '.card'
		});
	});
	
	var $containerCate = $('.categories-masonry-container');
	$containerCate.imagesLoaded( function () {
		$containerCate.masonry({
			columnWidth: '.card',
			itemSelector: '.card'
		});
	});
	
	//Language switch icon in the footer
    $( ".pll-parent-menu-item a" ).click(function() {
		$(this).toggleClass('active-language-link');
		$(".sub-menu").toggle();
		//e.preventDefault();
	});
	
	$(document).click(function(e){
        if(!$(e.target).closest('.pll-parent-menu-item a, .sub-menu').length){
            $(".sub-menu").hide();
            $(".pll-parent-menu-item a").removeClass('active-language-link');
        }
    });

    
    //Display Search Field
    $( ".social-nav .icon-search" ).click(function() {
	  $('.search-lg').toggleClass('active-search');
	  $('.social-nav .icon-search').toggleClass('active');
	});
	
/*
	$('#td-vdo').on('hidden.bs.modal', function (e) {
            $("#td-vdo iframe").each(function () {
                $(this).attr("src", '');
            });
	});
	
	$('#td-vdo').on('show.bs.modal', function (e) {
            $("#td-vdo iframe").each(function () {
                $(this).attr("src", '//www.youtube.com/embed/NzL_DYRMI6g?rel=0&amp;autoplay=1');
            });
	});
*/
	
	$("footer.main-footer .general h6").click(function () {
        $(this).toggleClass('active-nav');
        $('footer.main-footer .general').toggleClass('active-nav');
        $("footer.main-footer .general nav").slideToggle();
    });
    
    $("footer.main-footer .blog h6").click(function () {
        $(this).toggleClass('active-nav');
        $('footer.main-footer .blog').toggleClass('active-nav');
        $("footer.main-footer .blog nav").slideToggle();
    });
    
    $("footer.main-footer .contact h6").click(function () {
        $(this).toggleClass('active-nav');
        $('footer.main-footer .contact').toggleClass('active-nav');
        $("footer.main-footer .contact nav").slideToggle();
    });
    
    $("footer.main-footer .about h6").click(function () {
        $(this).toggleClass('active-nav');
        $('footer.main-footer .about').toggleClass('active-nav');
        $("footer.main-footer .about nav").slideToggle();
    });
    
    $("footer.main-footer .integrat h6").click(function () {
        $(this).toggleClass('active-nav');
        $("footer.main-footer .integrat nav").slideToggle();
    });
	
 //var url = window.location.href;
	//alert(url);
	// Socialcount.get(provider, url, callback(count))
/*
	Socialcount.get("facebook", "http://www.cssscript.com/", function (count) {
	  console.log(count);
	});
*/

	
	//var fbnumb = $('.st_facebook_vcount .stBubble_count').val();
	//var fbnumb = $('.st_facebook_vcount .stBubble_count').text();
	//console.log(fbnumb);
	
/*
	var numb = $('article.card .st_twitter_hcount .stBubble_hcount').text();
	$('#post-8579').click(function(){
		alert(numb);
	});
*/
    
});

$('.single-post').find('.no-break').append('<div id="share-label"><span class="share-total">Share</span></div>');


$(window).load(function() {
    $('form#searchform').get(0).reset(); //clear form data on page load
});
