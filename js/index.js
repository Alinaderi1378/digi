

var tooltipTriggerList = [].slice.call
(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltiplist = tooltipTriggerlist.map(function
(tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});

jQuery ('.slider-item').owlCarousel({
  loop:true,
  margin:10,
  rtl:true,
  nav:false,
  dots:true,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
       
      },
      600:{
          items:2,
       
      },
      1000:{
          items:2,
     
      }
  }
});
jQuery ('.product-gallery').owlCarousel({
  loop:true,
  margin:10,
  rtl:true,
  nav:false,
  dots:true,
  responsiveClass:true,
  responsive:{
      0:{
          items:2,
       
      },
      600:{
          items:3,
       
      },
      1000:{
          items:4,
     
      }
  }
});

jQuery('footer span.scrooltop').click(function(){
  jQuery('body,html').animate({scroollTop:0},1000);
});

//$('#piczoom').elevateZoom();
jQuery('#piczoom').ezPlus({
  zoomType: 'lens',
  lensShape: 'round',
  lensSize: 200
});
