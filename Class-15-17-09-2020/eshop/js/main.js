

$(document).ready(function(){

	$('.carousel').carousel({
	  interval: 2000
	})

/* for index page product */
       $('.owl-carousel.products').owlCarousel({
            loop:true,
            items:1,         
            autoplay:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:false,
                    loop:true
                }
            }
        })
	/* brand carousel active */
        $('.owl-carousel').owlCarousel({
            loop:true,
            items:4,         
            autoplay:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:false,
                    loop:true
                }
            }
        })

});