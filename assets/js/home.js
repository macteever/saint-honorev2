(function ($, root, undefined) {
	$(document).ready(function(){

      // Force top page when refresh
      $(document).ready(function(){
         $(this).scrollTop(0);
     });
      // PARALLAX CONTENT
      $(function() {
         // init controller
			var controller = new ScrollMagic.Controller();


         $('.home-main .row').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            var thisImg = $(this).find('.home-repeater-img');
            var thisText = $(this).find('.home-repeater-content-parent');
			// build a tween
         var homeContent1 =  new TimelineMax()
         .fromTo(thisText, 1,  
         {
            y: '-8%'
         }, 
         {
            y: '-18%'
         },'first')
         .fromTo(thisImg, 1,  
         {
            y: '0%'
         }, 
         {
            y: '10%'
         },'first')

         // build scene
			var sceneHpara1 = new ScrollMagic.Scene({
				triggerElement: this, // You can use 'this'
				duration: wH*1.5, // Distance duration in px
				triggerHook : 0.8 // 'percentage of window'
			})

			// Create a scene for each project
			.setTween(homeContent1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
			.addTo(controller);
         });
      });

      // VIDEO SPRITE

      // const video = document.getElementById('video-scroll');
      // const long = document.getElementById('video-length');
      // const triggerVideo = document.getElementById('home-sprite');
      // let scrollpos = 0;
      // let lastpos;

      // const controller = new ScrollMagic.Controller();
      
      // const scene = new ScrollMagic.Scene({
      // triggerElement: triggerVideo,
      // triggerHook : 0 // 'percentage of window'
      // });
      // const startScrollAnimation = () => {
      // scene
      //    //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
      //    .setPin('#home-sprite') // STOP SCROLL DURING VIDEO ANIMATION
      //    .addTo(controller)
      //    .duration(long.clientHeight)
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
      // const ready = () => {
      //    v.removeEventListener('canplaythrough', ready);

      //    video.pause();
      //    var i = setInterval(function() {
      //       if (v.readyState > 3) {
      //       clearInterval(i);
      //       video.currentTime = 0;
      //       callback();
      //       }
      //    }, 50);
      // };
      // v.addEventListener('canplaythrough', ready, false);
      // v.play();
      // };

      // preloadVideo(video, startScrollAnimation);

      // startScrollAnimation();
      
   });
})(jQuery, this);