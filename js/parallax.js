/*global $*/
$(document).ready(function(){
    
    $("#myName").addClass("animated rubberBand delay-1s")
    
    $("#scrollDown a").click(function(){
       $.scrollTo("#content", 800); 
    });
    
    $("#scrollDown").mouseenter(function(){
        $(this).effect('bounce', 500)
    })
    
    $("#link1").on("click", function(){
        $.scrollTo("#about", 800, {margin: true});
    });
    
    $("#link2").click(function(){
        $.scrollTo("#portfolio", 800, {margin: true});
    });
    
    $("#link3").click(function(){
        $.scrollTo("#Videos", 800);
    });  
    
    $("#link4").click(function(){
        $.scrollTo("#contact", 800);
    });  
    
    $("#scrollTop a").click(function(){
       $.scrollTo("#slide1", 800); 
    }); 
    
    
    $("#skillsets").delay(1000).fadeIn(800);
    
    $(window).scroll(function() {
    if ($(".text-profile").attr("data-emergence") == "hidden") {
        $("#profile").removeClass("fadeIn").addClass("animated fadeOut faster");
        $(".text-profile").removeClass("fadeInUp").addClass("animated fadeOut faster");
    } else {
        $("#profile").removeClass("fadeOut faster").addClass("animated fadeIn");
        $(".text-profile").removeClass("fadeOut").addClass("animated fadeInUp faster");
    }
});
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1200) {
    $('#scrollTop').fadeIn();
  } else {
    $('#scrollTop').fadeOut();
  }
});



