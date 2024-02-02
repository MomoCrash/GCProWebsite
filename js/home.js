let btn = document.querySelector(".img_trailer")
let actTrailer = document.querySelector(".trailer")
let line = document.querySelector(".line")
let video = document.getElementById("video")
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

window.onclick = function() {
    if (actTrailer.classList.contains("active")) {
        actTrailer.classList.toggle("active")
        actTrailer.pause()
    }
  };
btn.onclick = function() {
    if (!actTrailer.classList.contains("active")) {
        line.style.zIndex = "1000";
        line.classList.toggle("active");
        sleep(4000).then(() => {actTrailer.classList.toggle("active"); 
                                video.play(); 
                                line.classList.toggle("active");
                            })
    }
}