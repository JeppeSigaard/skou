$(function(){

    $('.header-search').on('click',function(e){
        e.preventDefault();

        if($('body').hasClass('search-mode')){
            $('.header-search-form').submit();
        }

        else{
            $('body').addClass('search-mode');
            setTimeout(function(){
                $('.header-search-form input[name="s"]').focus();
            },200);
        }
    });
});
