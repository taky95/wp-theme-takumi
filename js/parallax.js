/*global $*/
$(document).ready(function(){
    
    $("#scrollDown a").click(function(){
       $.scrollTo("#content", 800); 
    });
    
    $("#scrollDown").mouseenter(function(){
        $(this).effect('bounce', 500)
    })
    
    $("#link1").on("click", function(){
        $.scrollTo("#about", 800);
    });
    
    $("#link2").click(function(){
        $.scrollTo("#portfolio", 800);
    });
    
    $("#link3").click(function(){
        $.scrollTo("#Videos", 800);
    });  
    
    $("#link4").click(function(){
        $.scrollTo("#contact", 800);
    });  
    
    
    $("#skillsets").delay(1000).fadeIn(800);

});
