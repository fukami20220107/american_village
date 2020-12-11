$(function () {
    $('.card')
        .on('mouseover',function () {
            $(this).find('.line_bt').addClass('active');        
        })
        .on('mouseleave',function () {
            $(this).find('.line_bt').removeClass('active');        
        })
        .on('mouseover',function () {
            $(this).removeClass('shadow-none');        
        })
        .on('mouseleave',function () {
            $(this).addClass('shadow-none');        
        });

});