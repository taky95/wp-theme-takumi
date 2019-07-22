/*global $*/
$(document).ready(function(){
    var hmbgr= $("#hmbgr");
    
    // Title effect
    $("#myName").addClass("animated rubberBand delay-1s")
    
    // Arrow element in main section
    $("#scrollDown a").click(function(){
       $.scrollTo("#content", 800); 
    });
    
    $("#scrollDown").mouseenter(function(){
        $(this).effect('bounce', 500)
    })
    
    // Menu nav
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
    
    // Scroll back to top
    $("#scrollTop a").click(function(){
       $.scrollTo("#slide1", 800); 
    }); 
    
    // Show the skill set image 1s later
    $("#skillsets").delay(1000).fadeIn(800);
    
    
    // Parallax effect for each sections
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

// Parallax function for scroll back button
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1200) {
    $('#scrollTop').fadeIn();
  } else {
    $('#scrollTop').fadeOut();
  }
});



