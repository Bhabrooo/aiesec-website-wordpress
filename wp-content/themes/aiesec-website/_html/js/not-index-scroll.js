	//jQuery to collapse the navbar on scroll

$(window).scroll(function() {

    var scrollAmount = $(window).scrollTop();
    var windowHeight = jQuery(window).height();
    var navbarHeight = windowHeight * 0.12;
    var scrollPercent = (scrollAmount / windowHeight) * 100;

    $(".navbar").css("height", navbarHeight);

    if (scrollPercent > 15) {
        $(".navbar-custom").addClass("top-nav-collapse");
    } else {
        $(".navbar-custom").removeClass("top-nav-collapse");
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