//jQuery to collapse the navbar on scroll

$(function(){
   
    var scrollAmount = $(window).scrollTop();
    var windowHeight = jQuery(window).height();
     var windowWidth = jQuery(window).width();
    var scrollPercent = (scrollAmount / windowHeight) * 100;

    $(".navbar-fixed-top").css("position", "absolute");
    $(".navbar").css("padding-bottom", "1em");

    if (windowWidth < 767){
       //$(".nav").css("padding-top", "1em");
        $(".call-to-action").addClass('active');
        $("section").css("padding-bottom", "4em");
    }

    $('#top-link').click(function(e) {
        $(window).scrollTo(0, 1000);
        e.preventDefault();
    }); // top link



});



$(window).scroll(function() {

    var scrollAmount = $(window).scrollTop();

    var windowHeight = jQuery(window).height();
    var windowWidth = jQuery(window).width();
    var navbarHeight = windowHeight * 0.135;
    var scrollPercent = (scrollAmount / windowHeight) * 100;

    var scrollBottom = windowHeight + scrollAmount;
    
    
    if (scrollPercent > 95) {

        $(".navbar-fixed-top").css("position", "fixed");
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar").css("padding-bottom", "1.35em");
        


        if (windowWidth >= 767){
            $(".index-img-header").css("height", "auto");
            $(".index-img-header").css("width", "100%");
            $(".index-img-header").show();
            $('#top-link').addClass('active');

            var halfHeight = jQuery(window).height() * 0.60;
            var lastCTA = $('section#contact').offset().top - halfHeight;

            //var scrollAmountContact = $('section#contact').scrollTop();
            //var windowHeightContact = jQuery('section#contact').height();
            //var lastCTA = (scrollAmountContact / windowHeightContact) * 100;
    
            if ($(window).scrollTop() >= lastCTA){
               // $("#last-show-hook").fadeIn(500, 'linear');
                $("#last-show-btn").fadeIn(800, 'linear');
            }

        } else{
            $(".nav").css("padding-top", "1em");
            $(".index-img-header").css("height", "auto");
            $(".index-img-header").css("width", "50%");
            $(".index-img-header").show(); 
            $('#top-link').removeClass('active');


        }

    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-fixed-top").css("position", "absolute");
        $(".index-img-header").hide();
        $('#top-link').removeClass('active');
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