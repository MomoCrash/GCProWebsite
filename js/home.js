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

//Reserver
let book_btn = document.querySelector(".book_btn");

book_btn.onclick = function() {
    book_btn.classList.toggle("active")
    sleep(500).then(() => {
        book_btn.classList.toggle("active")
    })
}



//FAQ
let btn1 = document.querySelector(".button1");
let btn2 = document.querySelector(".button2");
let btn3 = document.querySelector(".button3");
let btn4 = document.querySelector(".button4");
let btn5 = document.querySelector(".button5");
let ans1 = document.querySelector(".answer1");
let ans2 = document.querySelector(".answer2");
let ans3 = document.querySelector(".answer3");
let ans4 = document.querySelector(".answer4");
let ans5 = document.querySelector(".answer5");

btn1.onclick = function(){
    btn1.classList.toggle("active");
    ans1.classList.toggle("active");
}

btn2.onclick = function(){
    btn2.classList.toggle("active");
    ans2.classList.toggle("active");
}

btn3.onclick = function(){
    btn3.classList.toggle("active");
    ans3.classList.toggle("active");
}

btn4.onclick = function(){
    btn4.classList.toggle("active");
    ans4.classList.toggle("active");
}

btn5.onclick = function(){
    btn5.classList.toggle("active");
    ans5.classList.toggle("active");
}

//prices

let pricesMorning = ["65€","60€","55€","50€","45€","40€","35€","30€"];
let pricesNoon = ["55€","50€","45€","40€","35€","30€","25€","20€"];

let nbPerson = document.querySelector(".amount");
let intNbPerson = parseInt(nbPerson.textContent);

let plusBtn = document.querySelector(".plus");
let minusBtn = document.querySelector(".minus");

let prices = document.querySelectorAll(".lightprice")
let lowPrices = document.querySelectorAll(".lightpriceNoon")

plusBtn.onclick = function(){
    if (intNbPerson <8){
        intNbPerson+=1;
        for (let i = 0; i < prices.length; i++){
            prices[i].textContent = pricesMorning[intNbPerson-1];
            lowPrices[i].textContent = pricesNoon[intNbPerson-1];
        }
        nbPerson.textContent = intNbPerson;
    }
}

minusBtn.onclick = function(){
    if (intNbPerson >1){
        intNbPerson-=1;
        for (let i = 0; i < prices.length; i++){
            prices[i].textContent = pricesMorning[intNbPerson-1];
            lowPrices[i].textContent = pricesNoon[intNbPerson-1];
        }
        nbPerson.textContent = intNbPerson;
    }
}
