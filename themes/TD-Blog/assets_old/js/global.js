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
	$( ".language-link" ).click(function(e) {
	  $(this).toggleClass('active-language-link');
	  $(".languages").toggle();
	  e.preventDefault();
	});
    
    $(document).click(function(e){
        if(!$(e.target).closest('a.language-link, .languages').length){
            $(".languages").hide();
            $("a.language-link").removeClass('active-language-link');
        }
    });
    
    //Display Search Field
    $( ".social-nav .icon-search" ).click(function() {
	  $('.search-lg').toggleClass('active-search');
	  $('.social-nav .icon-search').toggleClass('active');
	});
	
	$('#td-vdo').on('hidden.bs.modal', function (e) {
            $("#td-vdo iframe").each(function () {
                $(this).attr("src", '');
            });
	});
	
	$('#td-vdo').on('show.bs.modal', function (e) {
            $("#td-vdo iframe").each(function () {
                $(this).attr("src", 'https://www.youtube.com/embed/NzL_DYRMI6g');
            });
	});
/*
	var numb = $('article.card .st_twitter_hcount .stBubble_hcount').text();
	$('#post-8579').click(function(){
		alert(numb);
	});
*/
	
/*
    $(".sharing" ).click(function() {
	  var nong = $('.stBubble_hcount').text();
	  alert(nong);
	});
*/
    
});