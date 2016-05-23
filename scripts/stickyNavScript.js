$(document).ready(function () {

    //remove title from .current link
    $(".current").removeAttr('title');

    // stickyNav
	//$("#slider").leanSlider();
	
    $(window).scroll(function() {
        var y = $(window).scrollTop();

        if (y > 10) {
            $("header").css({
                "height": "29",
                "border-top": "none",
                "position": "fixed",
                "top": "0",
				"transition": "all .2s linear",
				"z-index": "3"
            });
            $("nav").css({
                "box-shadow": "0 2px 10px #666",
                "background": "#fff",
                
				"position": "absolute"
                
            });
            $(".logo").css({
                "background": "url('images/parallaxLogoSm.png') no-repeat",
                "top": "8px",
                "left": "10px",
				"height":"16px",
				"position": "absolute",
				 "border-style":"none",
				 "transition": "all .1s linear",
				 "z-index" : "3"
				
				 
            
			});

        } else {
            $("header").css({
                "height": "150px",
				"width" : "1000px",
                "border-top": "11px solid #ef3e36",
                "position": "relative",
               "transition": "all .25s linear",
				//"transition": "all .2s linear",
				  "background": "#fff"
				 
				  
            });
            $("nav").css({
				"width" : "1000px",
				"height" : "150px",
                "box-shadow": "none",
                "background": "",
				"position": "absolute",
				"left" : "0",
				"bottom": "0"
            });
            $(".logo").css({
				"height": "112px",
				"position": "absolute",
				"z-index": "3",
				"width": "262px",
                "background": "url('images/parallaxLogo.png') no-repeat",
                "top": "21px",
                "left": "57px",
                "transition": "all .25s linear",
				//"transition": "all .1s linear",
				"overflow": "hidden"
            });
        }
    });
});
