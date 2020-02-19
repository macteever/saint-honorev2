(function ($, root, undefined) {
	$(document).ready(function(){

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