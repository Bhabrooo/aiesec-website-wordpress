	//jQuery to collapse the navbar on scroll
$(function(){
   

    var scrollAmount = $(window).scrollTop();
    var windowHeight = jQuery(window).height();
    var windowWidth = jQuery(window).width();
    var scrollPercent = (scrollAmount / windowHeight) * 100;

    $(".navbar-fixed-top").css("position", "absolute");
    $(".navbar").css("padding-bottom", "1em");

    $('#top-link-color').click(function(e) {
        $(window).scrollTo(0, 1000);
        e.preventDefault();
    }); // top link

    

    if (windowWidth < 767){
        $(".nav").css("padding-top", "1em");
        $(".index-img-header").css("height", "auto");
        $(".index-img-header").css("width", "60%");
        $(".index-img-header").show();        
        $(".call-to-action").addClass('active');
         

    } else {
        $(".index-img-header").css("height", "auto");
        $(".index-img-header").css("width", "100%");
        $(".index-img-header").show();

    }
});

$(window).scroll(function() {

    var scrollAmount = $(window).scrollTop();
    var windowHeight = jQuery(window).height();
    var windowWidth = jQuery(window).width();
    var scrollPercent = (scrollAmount / windowHeight) * 100;


    if (scrollPercent > 15) {
        $(".navbar-fixed-top").css("position", "fixed");
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar").css("padding-bottom", "1.35em");

        if (windowWidth >= 767){
            $(".index-img-header").css("height", "auto");
            $(".index-img-header").css("width", "100%");
            $(".index-img-header").show();

 
            var halfHeight = jQuery(window).height() * 0.60;
            var lastCTA = $('section#contact-invert').offset().top - halfHeight;
    
            if ($(window).scrollTop() >= lastCTA){
               // $("#last-show-hook").fadeIn(500, 'linear');
                $("#last-show-btn").fadeIn(800, 'linear');
            }            



        } else{
            $(".nav").css("padding-top", "1em");
            $(".index-img-header").css("height", "auto");
            $(".index-img-header").css("width", "60%");
            $(".index-img-header").show(); 
            $('#top-link-color').removeClass('active');
            $(".call-to-action").addClass('active');
        }

    } else {
        $(".navbar-custom").removeClass("top-nav-collapse");
    }

    if (scrollPercent > 95) {
        if (windowWidth >= 767){
            $('#top-link-color').addClass('active');
        } 
    } else {
        $('#top-link-color').removeClass('active');
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

