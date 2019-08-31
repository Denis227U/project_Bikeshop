// document.body.onload = function() {
//
//     setTimeout(function() {
//         var preloader = document.getElementById('page-preloader');
//         if( !preloader.classlist.contains('done') ) {
//             preloader.classlist.add('done');
//         }
//     },1000);
// }


window.onload = function() {

  // Video-bg
  var video = document.getElementById("video");
  var playButton = document.getElementById("play-pause");
  // Event listener for the play/pause button
playButton.addEventListener("click", function() {
  if (video.paused == true) {
    video.play();
  } else {
    video.pause();
  }
});
// Video-bg

// 1var preloader
var preloader = document.getElementById('page-preloader');
setTimeout(function () {
    if (!preloader.classList.contains('done')) {
        preloader.classList.add('done');
    }
    setTimeout(function () {
        preloader.style.display = 'none';
    }, 1000)
}, 1000);

}
