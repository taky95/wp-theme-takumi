/*global $*/
$(document).ready(function(){
    var hmbgr= $("#hmbgr");
    
    $("#myName").addClass("animated rubberBand delay-1s")
    
    $("#scrollDown a").click(function(){
       $.scrollTo("#content", 800); 
    });
    
    $("#scrollDown").mouseenter(function(){
        $(this).effect('bounce', 500)
    })
    
    $("#link1").on("click", function(){
        $.scrollTo("#about", 800, {margin: true});
        hmbgr.prop("checked", false);
    });
    
    $("#link2").click(function(){
        $.scrollTo("#portfolio",  {duration:800, offset:-50});
        hmbgr.prop("checked", false);
    });
    
    $("#link3").click(function(){
        $.scrollTo("#videos", {duration:800, offset:-50});
        hmbgr.prop("checked", false);
    });  
    
    $("#link4").click(function(){
        $.scrollTo("#contact",  {duration:800, offset:-50});
        hmbgr.prop("checked", false);
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
    
    $(window).scroll(function() {
        if ($("#websites").attr("data-emergence") == "hidden") {
            $("#websites").removeClass("zoomIn").addClass("animated zoomOut faster");
            $("websites").removeClass("zoomOut").addClass("animated zoomIn faster");
        } else {
            $("#websites").removeClass("zoomOut faster").addClass("animated zoomIn");
            $("#websites").removeClass("zoomOut").addClass("animated zoomIn faster");
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



