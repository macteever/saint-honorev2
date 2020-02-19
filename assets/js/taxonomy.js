(function ($, root, undefined) {
	$(document).ready(function(){

      console.log('Taxonomy script'); 

 
      $(".collection-product-col").click(function () {
      var id_post = $(this).attr('id');
      $('.modal-child').empty();
      $.ajax({
            type: 'POST',
            url: 'https://saint-honore.paris/wp-admin/admin-ajax.php',
            data: {
               'post_id': id_post,
               'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
            }, success: function (result) {
               
               $('.modal-child').append(result);
               //return false;
            },
            error: function () {
               alert("error");
            }
         });
      });

      // POP UP ANIMATION PRODUCT
      $('.collection-product-col').click(function(){
         var buttonId = $(this).attr('id');
         $('#modal-container-product').removeAttr('class').addClass(buttonId);
         $('body').addClass('modal-active');
       })
      $('.close-modal').click(function(){
         $("#modal-container-product").addClass('out');
         $('body').removeClass('modal-active');
         // $('#modal-container-product').removeClass('one');
      });
       
      $(document).mouseup(function(e) {

         var containerParent = $("#modal-container-product");
         var container = $("#modal-container-product .modal");

         // if the target of the click isn't the container nor a descendant of the container
         if (!container.is(e.target) && container.has(e.target).length === 0) 
         {
            containerParent.addClass('out');
            $('body').removeClass('modal-active');
         }
         

      });


   });
})(jQuery, this);