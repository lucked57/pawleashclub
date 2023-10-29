var scroll_pos = false;
var position = $(window).scrollTop();
$(function () {
  'use strict'

  $('[data-toggle="offcanvas"], .modal-menu').on('click', function () {
      position = $(window).scrollTop();
    $('.offcanvas-collapse').toggleClass('open');
      //$('main').toggleClass('hide');
      $('.modal-menu').fadeToggle(300);
      if(scroll_pos){
          scroll_pos = false;
      }
      else{
          scroll_pos = true;
      }
  })
})


       
         $(window).scroll(function() {
                if ($(this).scrollTop() != position && scroll_pos == true) {
                  $(window).scrollTop(position);
                } 
            });
            
        
//$(".navbar-toggler").click(function(){$(".hamRotate, .hamRotate180").toggleClass("active")});
