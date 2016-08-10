$(function(){
    $(window).scroll(function(){

        if($(window).scrollTop() > $('.header-fixed').offset().top){
            $('body').addClass('fixed-header');

        }

        else{
            $('body').removeClass('fixed-header');
        }

    });

});
