$(function(){

    $('.cta-activate, section.cta-form').on('click',function(e){
        var t = $(e.target);
        if(t.is('section.cta-form, a.cta-activate, .cta-activate a')){
            e.preventDefault();
            $('body').toggleClass('cta-active');
        }

    });
});
