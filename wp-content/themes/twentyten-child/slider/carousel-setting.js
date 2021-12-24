 jQuery(document).on('ready', function() {
     
      jQuery(".gallery-container").slick({
        dots: false,
		  centerMode: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
		   autoplay: true,
  autoplaySpeed: 2000,	  
	  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
       
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
		  slidesToScroll: 1,
		   centerMode: true,
        
      }
    },
		  
		  	  	  
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
		   centerMode: true,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
		  
		  
		  
		  
		  
      });
      
    });