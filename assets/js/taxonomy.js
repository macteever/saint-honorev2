(function ($, root, undefined) {
	$(document).ready(function(){

      // SCROLL HORIZONTAL 
      // Set Pin for scroll horizontal

      $(function() {
         if( $(window).width() > 1024 ) {	

            $('#collection ul').css('overflow','hidden');
            var sceneHeight = $('#collection').outerHeight();
            
            // init controller
            var controller = new ScrollMagic.Controller();

            // build a tween
   
            
            var animateElem = $('#collection ul');
            var scene = new ScrollMagic.Scene({
               triggerElement: "#collection",
               triggerHook : 0,
               duration: sceneHeight
            })
            .on("enter", function () {
               // trigger animation by changing inline style.
               $(animateElem).css('overflow', 'auto');
            })
            .on("leave", function () {
               // trigger animation by changing inline style.
               $(animateElem).css('overflow', 'hidden');
            })
            // Create scene
            .addTo(controller);

            
            // Pint it
            var scene = new ScrollMagic.Scene({
               triggerElement: "#collection",
               triggerHook : 0,
               duration: sceneHeight*0.85
            })
            
            // Create scene
            .setPin("#collection")
            //.addIndicators({name: "Pin it durin scroll"})
            .addTo(controller);

            

            var triggerRowpair = $('.archive-tax-main:nth-of-type(2n+1)');
            var wH = $(window).outerHeight();
            
            var rowPair = $('.archive-tax-main:nth-of-type(2n) .archive-repeater-content');

            // build a tween
            var collectionPar1 =  new TimelineMax()
            .fromTo(rowPair, 1,  
            {
               y: -0
            }, 
            {
               y: -300
            },'first')
   
            // build scene
            var sceneHpara1 = new ScrollMagic.Scene({
               triggerElement: triggerRowpair, // You can use 'this'
               duration: wH*2, // Distance duration in px
               triggerHook : 1 // 'percentage of window'
            })
   
            // Create a scene for each project
            .setTween(collectionPar1) // trigger a TweenMax.to tween
            .addTo(controller);

            var rowImpair = $('.archive-tax-main:nth-of-type(2n+1) .archive-repeater-content');

            // build a tween
            var collectionPar2 =  new TimelineMax()
            .fromTo(rowImpair, 1,  
            {
               y: 0
            }, 
            {
               y: 200
            },'first')
   
            // build scene
            var sceneHpara1 = new ScrollMagic.Scene({
               triggerElement: triggerRowpair, // You can use 'this'
               duration: wH*2, // Distance duration in px
               triggerHook : 1 // 'percentage of window'
            })
   
            // Create a scene for each project
            .setTween(collectionPar2) // trigger a TweenMax.to tween
            //.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
            .addTo(controller);
            
            ////// PARALLAX VERTICAL  
            // TOP CUBE SUB CAT

            var wH = $(window).outerHeight();
            var thisText = $('.sub-cat-top-cube');
            // build a tween
            var topCube1 =  TweenMax.fromTo(thisText, 1,  { y: '10%'}, { y: '-10%'},'first')
   
            // build scene
            var sceneHpara1 = new ScrollMagic.Scene({
               triggerElement: '.banner-archive-subcat', // You can use 'this'
               duration: wH, // Distance duration in px
               triggerHook : 0 // 'percentage of window'
            })
   
            // Create a scene for each project
            .setTween(topCube1) // trigger a TweenMax.to tween
            // .addIndicators({name: "Parllax vertical top cube"}) // add indicators (requires plugin)
            .addTo(controller);
            
            // END TOP CUBE SUB CAT

            ////// PARALLAX HORIZONTAL
            var controller = new ScrollMagic.Controller({vertical: false});

            $('.wrapper-scroll-bloc').each(function() {

               var triggerScrollH = $('.targetscroll-H');
               var wCollec = $('.wrapper-scroll-bloc').outerWidth();
               var thisImg = $(this).find('.scroll-section-img');
               var thisText = $(this).find('.scroll-section-content');
            
               // build a tween

               var collecScroll =  new TimelineMax()
               .fromTo(thisText, 1,  
               {
                  x: -80
               }, 
               {
                  x: 80
               },'first')
               .fromTo(thisImg, 1,  
               {
                  x: 50
               }, 
               {
                  x: -80
               },'first')
            
               // build scene
               var sceneHpara2 = new ScrollMagic.Scene({
                  triggerElement: this, // You can use 'this'
                  duration: wCollec*1.5, // Distance duration in px
                  triggerHook : 0.25 // 'percentage of window'
               })

               // Create a scene for each project
               .setTween(collecScroll) // trigger a TweenMax.to tween
               //.addIndicators({name: "Parallax horizontal"}) // add indicators (requires plugin)
               .addTo(controller);
            });
            // END HORIZONTAL PARALLAX
            
         }
      }); // END RESPONSIVE
      

      // END SCROLL HORIZONTAL


      // AJAX SUB COLLECTION POP UP
      // $(".collection-product-col").click(function () {
      // var id_post = $(this).attr('id');
      // $('.modal-child').empty();
      // $.ajax({
      //       type: 'POST',
      //       // url: 'https://saint-honore.paris/wp-admin/admin-ajax.php',
      //       url: 'http://localhost/saint-honorev2/wp-admin/admin-ajax.php',
      //       data: {
      //          'post_id': id_post,
      //          'action': 'f711_get_post_content' //this is the name of the AJAX method called in WordPress
      //       }, success: function (result) {
               
      //          $('.modal-child').append(result);
      //          $('.ajax-thumbnail').zoom({
      //             //on: 'click',
      //             magnify: 1.15,
      //             duration: 300,
      //             touch: true
      //          });
               
      //          //return false;
      //       },
      //       error: function () {
      //          alert("error");
      //       }
      //    });
      // });

      // POP UP ANIMATION PRODUCT
      // $('.collection-product-col').click(function(){
      //    var buttonId = $(this).attr('id');
      //    $('#modal-container-product').removeAttr('class').addClass(buttonId);
      //    $('body').addClass('modal-active');
      //  })
      // $('.close-modal').click(function(){
      //    $("#modal-container-product").addClass('out');
      //    $('body').removeClass('modal-active');
      //    // $('#modal-container-product').removeClass('one');
      // });
       
      // $(document).mouseup(function(e) {

      //    var containerParent = $("#modal-container-product");
      //    var container = $("#modal-container-product .modal");

      //    // if the target of the click isn't the container nor a descendant of the container
      //    if (!container.is(e.target) && container.has(e.target).length === 0) 
      //    {
      //       containerParent.addClass('out');
      //       $('body').removeClass('modal-active');
      //    }
         

      // });
      // ZOOM ANIMATION HOVER
      
      
      // END ZOOM ANIMATION HOVER


   });
})(jQuery, this);