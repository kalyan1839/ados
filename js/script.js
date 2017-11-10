$(document).ready(function() {
    $("#lightgallery").lightGallery(); 

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $(".header").addClass("scrolltop");
        }else{
        	 $(".header").removeClass("scrolltop");
        }
    });

});