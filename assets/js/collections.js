(function ($, root, undefined) {
	$(document).ready(function(){

      // PARRALAX VERTICAL 

      $(function() {
      // init controller
                  var controller = new ScrollMagic.Controller();


      $('.collections-main .row-collections-parent').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            //var thisImg = $(this).find('.tmplt-collections-media');
            var thisText = $(this).find('.tmplt-collections-content');
                  // build a tween
      var collecContent1 =  new TimelineMax()
      .fromTo(thisText, 1,  
      {
            y: '0%'
      }, 
      {
            y: '-20%'
      },'first')
      // .fromTo(thisImg, 1,  
      // {
      //       y: '0%'
      // }, 
      // {
      //       y: '15%'
      // },'first')

      // build scene
            var sceneCpara1 = new ScrollMagic.Scene({
                  triggerElement: this, // You can use 'this'
                  duration: wH*1.5, // Distance duration in px
                  triggerHook : 0.8 // 'percentage of window'
            })

            // Create a scene for each project
            .setTween(collecContent1) // trigger a TweenMax.to tween
            //.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
            .addTo(controller);
      });
      });

      // VIDEO SPRITE
     

         // const controller = new ScrollMagic.Controller();

         // const video = document.getElementById('video-scroll');
         // const long = document.getElementById('video-length');
         // const triggerVideo = document.getElementById('collection-sprite');
         // let scrollpos = 0;
         // let lastpos;
   
         
         // const scene = new ScrollMagic.Scene({
         // triggerElement: triggerVideo,
         // triggerHook : 0 // 'percentage of window'
         // });

         // const startScrollAnimation = () => {
         // scene
         //    //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
         //    .setPin('#collection-sprite') // STOP SCROLL DURING VIDEO ANIMATION
         //    .duration(long.clientHeight)
         //    .addTo(controller)
         //    .on("progress", (e) => {
         //       scrollpos = e.progress;
         //    });
            
            
         //    setInterval(() => {
         //       if (lastpos === scrollpos) return;
         //       requestAnimationFrame(() => {
         //          video.currentTime = video.duration * scrollpos;
         //          video.pause();
         //          lastpos = scrollpos;
         //          // console.log(video.currentTime, scrollpos);
         //       });
         //    }, 50);
         // };
         
         // const preloadVideo = (v, callback) => {
         //    const ready = () => {
         //       v.removeEventListener('canplaythrough', ready);
               
         //       video.pause();
         //       var i = setInterval(function() {
         //          if (v.readyState > 3) {
         //             clearInterval(i);
         //             video.currentTime = 0;
         //             callback();
         //          }
         //       }, 50);
         //    };
         //    v.addEventListener('canplaythrough', ready, false);
         //    v.play();
         // };

         // preloadVideo(video, startScrollAnimation);
         // startScrollAnimation();



   });
})(jQuery, this);