(function($){
    // jumbo slider
    $(window).ready(function(){
        $('.jumbotron > ul').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            arrows: false,
            autoplaySpeed: 7000,
            cssEase: 'linear',
            pauseOnHover: false,
            pauseOnFocus: false,
        });
    });
    $('.jumbotron > ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-list').removeClass('action');
        $("video").each(function(){
			$(this).stop();
		});
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
    $('.jumbotron > ul').on('init', function(event,slick){
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
            if($('.slick-active.visual-list').find("video").length > 0){
				var vid = $('.slick-active.visual-list').find("video").get(0);
				vid.play();
			}
        });
    });
    
    // new-products-slide 
    $(window).ready(function(){
        $('.new-products-slide').slick({
            autoplay: true,
            dots: true,
            infinite: true,
            arrows: false
        });
    });
    
    // product-details effect
    $(window).on('scroll', function() {
        $('.product-details').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('action');
            }
        });
    });
})(jQuery);