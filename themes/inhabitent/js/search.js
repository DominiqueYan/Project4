(function($){
$(function(){
    $('.icon-search').on('click',()=> {
        $('.search-field').toggleClass('show');
            $('.search-field').focus();
    });

    $('.search-field').on('blur',()=> {
        if ($('.search-field').val().length >0){
            return false;
        }
    $('.search-field').removeClass('show');
    });
});
})(jQuery);
