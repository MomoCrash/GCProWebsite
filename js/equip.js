//Trailer
let btn = document.querySelector(".img_trailer");
let actTrailer = document.querySelector(".trailer");
let line = document.querySelector(".line");
let img_book = document.querySelector(".img_book");
let video = document.getElementById("video");
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


window.onclick = function() {
    if (actTrailer.classList.contains("active")) {
        actTrailer.classList.toggle("active");
        video.pause();
    }
  };
btn.onclick = function() {

    line.style.zIndex = "1000";
    line.classList.toggle("active");
    sleep(2750).then(() => {actTrailer.classList.toggle("active"); 
                            video.play(); 
                            line.style.zIndex="-1000";
                            line.classList.toggle("active");      
                        })
    video.addEventListener('ended',function() {
        video.pause();
        video.currentTime = 0;
        actTrailer.classList.toggle("active");
    })

}