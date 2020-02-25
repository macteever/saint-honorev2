(function ($, root, undefined) {
	$(document).ready(function(){

      // MODAL PAGE FORM MESSAGE CONTACT
      $('.button-form').click(function(){
         var buttonId = $(this).attr('id');
         $('#modal-container-form').removeAttr('class').addClass(buttonId);
         $('body').addClass('modal-active');
       })
       
      $(document).mouseup(function(e) {

         var containerParent = $("#modal-container-form");
         var container = $("#modal-container-form .modal");

         // if the target of the click isn't the container nor a descendant of the container
         if (!container.is(e.target) && container.has(e.target).length === 0) 
         {
            containerParent.addClass('out');
            $('body').removeClass('modal-active');
         }
      });
       
      //MODAL PAGE FORM TELEPHONE CONTACT
      $('.button-phone').click(function(){
         var buttonId = $(this).attr('id');
         $('#modal-container-phone').removeAttr('class').addClass(buttonId);
         $('body').addClass('modal-active');
      })
      
      // $(document).mouseup(function(e) {

      //    var containerParent = $("#modal-container-phone");
      //    var container = $("#modal-container-phone .modal");

      //    // if the target of the click isn't the container nor a descendant of the container
      //    if (!container.is(e.target) && container.has(e.target).length === 0) 
      //    {
      //       containerParent.addClass('out');
      //       $('body').removeClass('modal-active');
      //    }
      // });


   });
})(jQuery, this);