(function($){
    // header scroll event
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });
    
    // global-search
    $(document).on('click','.global-search .btn-search', function(){
        $('.global-search').addClass('show-search');
        $('.global-search .form-group').addClass('d-block');
        $('.global-search .form-group').removeClass('d-none');
    });
    $(document).on('click','.backdrop', function(){
        $('.global-search').removeClass('show-search');
        $('.global-search .form-group').addClass('d-none');
        $('.global-search .form-group').removeClass('d-block');
    });
    
    // page-header effect
    $(window).on('load', function(){
        $('.page-header').addClass('on');
    });
    
    // gnb 
    $(document).on('mouseenter focus', '#gnb > ul > li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $('body').addClass('opened');
	});
    $(document).on('mouseleave', '#gnb > ul > li', function() {
        $('body').removeClass('opened');
    });
})(jQuery);