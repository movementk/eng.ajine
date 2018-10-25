(function($){
    // lnb scroll event
    $(window).on('scroll', function() {
        if ( $(window).scrollTop() > 345 ) {
            $('body').addClass('nav-top');
        } else {
            $('body').removeClass('nav-top');
        }
    });
})(jQuery);