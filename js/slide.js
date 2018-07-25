/* global $ */

$(document).ready(function(){
    
    var page = 0;

    $(".slideshow").css("display", "none");
    $(".slideshow").eq(page).css("display","block");
    
    function changePic(){
        $(".slideshow").fadeOut(1000);
        $(".slideshow").eq(page).fadeIn(1000);
    }
    
    console.log($(""))
    var Timer;
    function startTimer(){
        Timer =setInterval(function(){
            if(page === parseInt($(".slideshow").length-1)){
                page = 0;
                changePic();
            }else{
                page ++;
                changePic();
              };
        },5000);
    }
   function stopTimer(){
        clearInterval(Timer);
    }

    startTimer();
    
});
