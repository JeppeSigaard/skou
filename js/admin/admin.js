var hideables = [
    '#postdivrich',
    '#revisionsdiv',
    '#slugdiv',
    '#postcustom',
    '#commentsdiv',
    '#commentstatusdiv',
    '#authordiv',
    ];

jQuery(function($){
    if(typeof flow_page !== 'undefined' && flow_page !== 'indhold'){
       for (i = 0; i < hideables.length; i++) {
           $(hideables[i]).hide();
       }

    }
});
