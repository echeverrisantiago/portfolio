jQuery(document).ready(function(){
    window.onscroll=function(){
    if(window.pageYOffset > StarterScroll){
        jQuery('#masthead-secondary').addClass('oculto');
        jQuery('#masthead').removeClass('oculto');
        setTimeout(at,100);
    } else{
        jQuery('#masthead-secondary').removeClass('oculto');
        jQuery('#masthead').removeClass('fixed');
        jQuery('#masthead').addClass('oculto');
    }
    }

    function at(){
        jQuery('#masthead').addClass('fixed');
    }
});