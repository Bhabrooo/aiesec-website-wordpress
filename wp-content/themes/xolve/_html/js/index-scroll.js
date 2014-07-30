//jQuery to collapse the navbar on scroll

$(window).scroll(function() {

    var scrollAmount = $(window).scrollTop();
    var windowHeight = jQuery(window).height();
    var navbarHeight = windowHeight * 0.12;
    var scrollPercent = (scrollAmount / windowHeight) * 100;


    $(".navbar-fixed-top").css("position", "absolute");
    $(".navbar").css("height", navbarHeight);

    if (scrollPercent > 95) {
         $(".navbar-fixed-top").css("position", "fixed");
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".index-img-header").show();
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
         $(".navbar-fixed-top").css("position", "absolute");
        $(".index-img-header").hide();
    }


});


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('.port-container a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});