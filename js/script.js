


//fadein
$(function(){
    $(window).scroll(function (){
        $('.fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
                $(this).addClass('fadein');
            }
        });
    });
});



//wp

jQuery(function ($) {

});
