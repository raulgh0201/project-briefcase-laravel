$(document).ready(function(){
    if(window.location.href.indexOf('index') > -1){
        $('.slider').bxSlider({
          auto:true,
          responsive:true,
          stopAutoOnClick: true,
          touchEnabled:false
        });
    }
});  