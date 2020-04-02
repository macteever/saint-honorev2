(function ($, root, undefined) {
	$(document).ready(function(){

       // Zoom single presentoir

      $('.ajax-thumbnail').zoom({
         //on: 'click',
         magnify: 1.15,
         duration: 300,
         touch: true
      });

      // ANIMATION UP SINGLE
      // $(window).scroll(function(){
      //    var wH = $(window).outerHeight();
      //    var wH_3 = wH*0.45
      //    if ($(window).scrollTop() > wH_3){
      //       $('article').removeClass( "single-up");
      //    }
      //    else if ($(window).scrollTop() == 0){
      //       $('article').addClass("single-up");
      //    }
      // });
      
      		    
	});
})(jQuery, this);