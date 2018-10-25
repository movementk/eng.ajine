(function($){
    // global search event
    $(document).on('click','.search-area > .btn-search', function(){
        $('.global-search').addClass('show-search');
    });
    $(document).on('click','.global-search > .backdrop', function(){
        $('.global-search').removeClass('show-search');
    });

    // gnb event
    $(document).on('click','#header .nav-open', function(){
        $(this).addClass('nav-close');
        $(this).removeClass('nav-open');
        $('body').addClass('opened');
    });
    $(document).on('click','#header .nav-close', function(){
        $(this).addClass('nav-open');
        $(this).removeClass('nav-close');
        $('body').removeClass('opened');
    });
    $(document).on('click', '#gnb ul > li > a', function() {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
    });
})(jQuery);