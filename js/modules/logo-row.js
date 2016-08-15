$(function(){

    if($('.logo-row').length){


        $('.logo-row').flickity({
            prevNextButtons: false,
            pageDots: false,
            cellSelector: '.row-logo',
            accessibility: true,
            wrapAround: false,
            contain: true
        });
    }
});
