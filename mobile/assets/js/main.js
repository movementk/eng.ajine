(function($){
    // jumbo slider
    $(window).ready(function(){
        $('.jumbotron > .jumbo-slide').slick({
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
    $('.jumbotron > .jumbo-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.visual-list').removeClass('action');
        $("video").each(function(){
			$(this).stop();
		});
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action'); 
        });
    });
    $('.jumbotron > .jumbo-slide').on('init', function(event,slick){
        setTimeout(function (){ 
            $('.slick-active.visual-list').addClass('action');
            if($('.slick-active.visual-list').find("video").length > 0){
				var vid = $('.slick-active.visual-list').find("video").get(0);
				vid.play();
			}
        });
    });

    // product list
    $(window).on('scroll', function() {
        $('.product .section-content').each(function(index, elem) {
            if ($(window).scrollTop() > $(elem).offset().top - ($(window).height() / 1.3)) {
                $(elem).addClass('on');
            }
        });
    });
    $(window).ready(function(){
        $('.product-list').slick({
            fade: true,
            pauseOnHover: false,
            pauseOnFocus: false,
            prevArrow: '<button class="slick-prev slick-arrow"><i class="icon-left"><span class="sr-only">이전</span></i></button>',
            nextArrow: '<button class="slick-next slick-arrow"><i class="icon-right"><span class="sr-only">다음</span></i>        </button>'
        });
    });
    $('.product-list').on('afterChange', function(event, slick, currentSlide, nextSlide){
        $('.slick-slide.p-slide').removeClass('action');
        setTimeout(function (){ 
            $('.slick-active.p-slide').addClass('action'); 
        });
    });
    $('.product-list').on('init', function(event,slick){
        setTimeout(function (){ 
            $('.slick-active.p-slide').addClass('action'); 
        });
    });

    // new products
    $(window).ready(function(){
        $('.new-list').slick({
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
})(jQuery);