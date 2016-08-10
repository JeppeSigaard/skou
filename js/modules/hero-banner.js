$(function(){

    if($('.hero-banner').length){


        $('.hero-banner').flickity({
            prevNextButtons: false,
            cellSelector: '.banner-item',
            accessibility: true,
            wrapAround: true,

        });
    }
});
