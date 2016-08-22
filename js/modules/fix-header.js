function setMenuPaddingTop(elem){
    var w = $(window).width();
    var add = (w < 640) ? 53 : 63;
    var top = $('.header-fixed').offset().top - $(window).scrollTop() + add;
    if(top < add){top = add;}

    if($(window).width() < 700){
        $(elem).css({top : top});
    }
}

$(function(){

    setMenuPaddingTop('.site-main-menu');
    $(window).resize(function(){
        setMenuPaddingTop('.site-main-menu');
    });

    $(window).scroll(function(){

        setMenuPaddingTop('.site-main-menu');

        if($(window).scrollTop() > $('.header-fixed').offset().top){
            $('body').addClass('fixed-header');

        }

        else{
            $('body').removeClass('fixed-header');
        }

    });
});
