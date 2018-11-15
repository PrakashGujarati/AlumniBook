(function($) {
    'use strict'; // Start of use strict
    /*------------------------------------------------------------------
    Navigation Hover effect
    ------------------------------------------------------------------*/
    $('ul.navbar-nav li.dropdown').on('hover', function() {
        $(this).find('.sub-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.sub-menu').stop(true, true).delay(200).fadeOut(500);
    });
    //MobileMenu Activated
    $('.mainmenu-area nav').meanmenu();
    /*------------------------------------------------------------------
        Animation Numbers
    ------------------------------------------------------------------*/
    jQuery('.animateNumber').each(function() {
        var num = jQuery(this).attr('data-num');

        var top = jQuery(document).scrollTop() + (jQuery(window).height());
        var pos_top = jQuery(this).offset().top;
        if (top > pos_top && !jQuery(this).hasClass('active')) {
            jQuery(this).addClass('active').animateNumber({
                number: num
            }, 2000);
        }
    });
    /*------------------------------------------------------------------
          Login Register Popup
    ------------------------------------------------------------------*/
    $('.login').find('a').on('click', function() {
        $('.login-popup').show();
    });
    $('.register').find('a').on('click', function() {
        $('.register-popup').show();
    });
    $('.popup').find('.fa-times').on('click', function() {
        $('.popup').hide();
    });
    /*------------------------------------------------------------------
    	Header Search
    ------------------------------------------------------------------*/
    $("#search-form").hide();
    $(".top-wrapper").find('.fa-search').on('click', function() {
        $("#search-form").toggle();
        $("#search-form").fadeIn().addClass("open");
    });
    $("#search-form").find('.close').on('click', function() {
        $("#search-form").fadeOut().removeClass("open");
        $("#this").hide();
    });
    /*------------------------------------------------------------------
    	Scrool Top
    ------------------------------------------------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i><i class="fa fa-graduation-cap" aria-hidden="true"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
	/*------------------------------------------------------------------
        Year
    ------------------------------------------------------------------*/
	$(function(){
    var theYear = new Date().getFullYear();
    $('#year').html(theYear);
  });
    /*------------------------------------------------------------------
        Loader
    ------------------------------------------------------------------*/

    $("#dvLoading").fadeOut("fast");

    /*------------------------------------------------------------------
        Owl Carousel for Other Singers
    ------------------------------------------------------------------*/
    var owl = $("#events");
    owl.owlCarousel({
        itemsCustom: [
            [0, 1],
            [450, 1],
            [600, 1],
            [700, 1],
            [1000, 3],
            [1200, 3],
            [1400, 3],
            [1600, 3]
        ],
        navigation: true
    });
    /*------------------------------------------------------------------
        Coming Soon Cout Down
    ------------------------------------------------------------------*/
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cntdown"><span class="days"><strong>%-D</strong><p>Days</p></span></div><div class="cntdown"><span class="hour"><strong> %-H</strong><p>Hours</p></span></div> <div class="cntdown"><span class="minutes"><strong>%M</strong> <p>MINUTES</p></span></div><div class="cntdown"><span class="second"><strong> %S</strong><p>SECONDS</p></span></div>'
            ));
        });
    });

})(jQuery);