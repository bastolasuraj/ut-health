(function($){
  'use strict';

  $(function(){



  // Mean menu.
  $('.menu-container').meanmenu();


  //Sticky navbar
  window.onscroll = function() {myFunction()};

     // var navbar = document.getElementById("navbar");
     var navbar =$('#navbar').offset();

      var sticky = navbar.top;

      function myFunction() {
        if (window.pageYOffset >= sticky) {
         $('#navbar').addClass("sticky");
        } 
        else {
        $('#navbar').removeClass("sticky");
        }
      }
  
  //animation for contact form 7 on focus
  jQuery( '.wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select' ).on( 'focus',function(){
    var target = jQuery( this ).attr( 'id' );
    jQuery('label[for="'+target+'"]').addClass( 'move-to-top' );
  });

  jQuery( '.wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select' ).on( 'blur',function(){
    var target = jQuery( this ).attr( 'id' );
    jQuery('label[for="'+target+'"]').removeClass( 'move-to-top' );
  });


  
    
var owllogo = $(".featured-slider");

  owllogo.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    dots: false,
    smartSpeed: 900,
    autoplay: true,
    autoplayTimeout: 7000,
    fallbackEasing: 'easing',
    transitionStyle: "fade",
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    navText: ['<img src="http://localhost/ut-health/wp-content/uploads/2020/06/left-arrow.png">', '<img src="http://localhost/ut-health/wp-content/uploads/2020/06/right-arrow.png">']
  });

  var owllogo = $(".finances-slider");

  owllogo.owlCarousel({
    items: 4,
    loop: true,
    nav: true,
    dots: false,
    smartSpeed: 900,
    autoplay: true,
    autoplayTimeout: 3000,
    fallbackEasing: 'easing',
    transitionStyle: "fade",
    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2
      },
      768: {
        items: 3
      },
      1024: {
        items: 4
      }
    },
    autoplayHoverPause: true,
    animateOut: 'fadeOut',
    navText: ['<i class="fa fa-angle-left" aria-hidden="true" style="font-size: 35px"></i>', '<i class="fa fa-angle-right" aria-hidden="true" style="font-size: 35px"></i>']
  });


  $('#primary, #secondary')
    .theiaStickySidebar({
      additionalMarginTop: 100
  });

  var filterActive;

  function filterCategory(category) {
    
      if (filterActive != category) {
          
          // reset results list
          $('.filter-cat-results .f-cat').removeClass('active');
          
          // elements to be filtered
          $('.filter-cat-results .f-cat')
              .filter('[data-cat="' + category + '"]')
              .addClass('active');
          
          // reset active filter
          filterActive = category;
      }
  }
  
  $('.f-cat').addClass('active');
  
  $(document).on( 'change', '.filter-events', function() {
      var val = $(this).val();
      if ( 'cat-all' === val ) {
          $('.filter-cat-results .f-cat').addClass('active');
          filterActive = 'cat-all';
      } else {
          filterCategory(val);
      }
  });


  });
})(jQuery);