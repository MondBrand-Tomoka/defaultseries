
//fadein
$(function(){
    $(window).scroll(function (){
        $('.fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
            //if (scroll > elemPos - windowHeight + windowHeight/5){

                $(this).addClass('fadein');
            } else {
            	$(this).removeClass('fadein');
            }
        });
    });
});



//wp
jQuery(function ($) {
    $(window).scroll(function (){
        $('.fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 150){
            //if (scroll > elemPos - windowHeight + windowHeight/5){

                $(this).addClass('fadein');
            } else {
            	$(this).removeClass('fadein');
            }
        });
    });
});
