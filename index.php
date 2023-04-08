<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello All!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>
  <body>
    <style>
      p {
        text-indent: 1.5rem;
        margin-left: 1.5rem;
        margin-top: 0.5rem; 
        margin-right: 1.5rem; 
        font-size: 12px; 
        font-family:"Consolas","Monaco","Bitstream Vera Sans Mono","Courier New","sans-serif";'
      }
      svg {
        display: block;
        width: 100px;
        margin-left: 3rem;
      }
      
      path {
        stroke-dasharray: 4712.052734375px;
        stroke-dashoffset: 4712.052734375px;

        animation-delay: 1s;
      }

      @keyframes LineAnimation {
        to {
          stroke-dashoffset: 0px;
        }
      }
    </style>        

  <script src="https://unpkg.com/typeit@8.0.7/dist/index.umd.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <p style="margin-top: 3rem !important;" class="text-white" id="start"></p>
        <p class="text-white" id="intro"></p>
        <p class="text-white" id="mains"></p>
        <p class="text-white" id="conc"></p>
        <p class="text-white" id="sinc"></p>

<svg width="100" height="70" viewBox="0 0 1011 755" fill="none" xmlns="http://www.w3.org/2000/svg">
<path id="ttd" d="M6.18916 134.349C0.691296 96.5657 11.4671 17.8497 98.5533 5.25515C207.411 -10.4881 45.7738 707.402 25.9815 748.334C6.18916 789.267 246.996 61.9307 246.996 87.1198C246.996 112.309 164.528 597.2 217.307 634.983C259.531 665.21 300.875 595.101 316.269 556.267C337.161 504.84 374.326 398.835 355.853 386.241C332.762 370.497 299.775 575.159 316.269 572.011C332.762 568.862 372.347 531.078 382.243 446.065C392.139 361.052 349.256 584.605 392.139 578.308C435.023 572.011 471.309 518.484 474.607 257.146C477.906 -4.19081 402.036 512.186 458.114 515.335C514.192 518.484 583.465 398.835 573.569 386.241C563.673 373.646 507.595 477.551 540.582 483.849C573.569 490.146 613.154 424.024 616.452 411.43C619.751 398.835 596.66 452.362 629.647 464.957C662.634 477.551 774.791 411.43 784.687 405.133C794.583 398.835 791.284 436.619 853.96 436.619C904.101 436.619 978.212 415.628 1009 405.133" stroke="white" stroke-width="10"/>
</svg>

<p class="text-white" style="margin-left: 1.5rem; margin-bottom: 3rem;" id="sign"></p>
<audio id="audio" src="lauv_song.mp3" autoplay="autoplay"></audio>
<div id="outer" class="outer">
  <div class="middle">
    <div class="inner">
    <div class="title text-center fly-margin">
        <h1>Happy Birthday My Dear!</h1>
        <i><h5 style="font-size: 16px !important;">I wish you all the best!</h5></i>
<button style="margin-bottom: 25px;" class="btn btn-outline-light" id="toggle">Start Here</button>
</div>
    </div>
  </div>
</div>
<!--script area-->
<script>
const song = document.querySelector('#audio');
//relevant part to fading in audio
song.volume = 0;
$('#audio').animate({volume: 1.0}, 5000);
song.play();

const btn = document.getElementById("toggle");
const title = document.getElementById("outer");
btn.onclick = function () {
  instance.go();
  audio.play();
  if (title.style.display !== "none") {
    title.style.display = "none";
  }
};
const sign = new TypeIt("#sign", {
  strings: "Yoga Raditya",
  cursor: false,
  speed: 65,
  afterComplete: function(sign){
    sign.destroy();
    song.volume = 1;
    $('#audio').animate({volume: 0}, 5000, function() {
      song.pause();
    });
  }
})

const instance = new TypeIt("#start", {
  speed: 50,
  startDelay: 900,
  afterComplete: function(instance){
    instance.destroy();
    intro.go();
  }
})
const intro = new TypeIt("#intro", {
  speed: 50,
  startDelay: 900,
  afterComplete: function(instance){
    intro.destroy();
    mains.go();
  }
})
const mains = new TypeIt("#mains", {
  speed:50,
  startDelay: 900,
  afterComplete: function(instance){
    mains.destroy();
    conc.go();
  }
})
const conc = new TypeIt("#conc", {
  speed: 50,
  startDelay: 900,
  afterComplete: function(instance){
    conc.destroy();
    sinc.go();
  }
})
const sinc = new TypeIt("#sinc", {
  speed: 50,
  startDelay: 900,
  afterComplete: function(instance){
    sinc.destroy();
    document.getElementById('ttd').style.animation = "LineAnimation 2s ease forwards";
    sign.go();
  }
})
instance.type("My Dearest,", { delay: 450 })
intro.type("Today is your special day,", {delay: 150})
intro.type(" but it also a day that gives me all the reasons to celebrate.", {delay: 250})
intro.type(" It's your birthday and I don't know where to start.", { delay: 250 })
intro.type(" There are so many things I'd like to say on your special day.", { delay: 250 })
intro.type(" So let me start by saying the most obvious things,", {delay: 250}) 
intro.type(" happy birthday to you!", { delay: 450 })
mains.type("I often look back to when i first met you in junior high school and I still remember how smart you were back then.", { delay: 250 })
mains.type(" Nobody would have thought that we will be friends this far.", { delay: 250 })
mains.type(" <br>You are the sunshine in my life,", { delay: 150 })
mains.type(" the stars that light my sky,", { delay: 150 })
mains.type(" the reason for my happiness,", { delay: 150 })
mains.type(" the apple of my eye.", { delay: 250 })
mains.type(" I think about you all the time,", { delay: 150 })
mains.type(" and can't help but feel so blessed,", { delay: 150 })
mains.type(" to know that you're a part of my life,", { delay: 150 })
mains.type(" and to have you as my friend.", { delay: 250 })
mains.type(" Well, words will never be enough to express how blessed i am to have a friends like you and how important you have become for my life.", {delay: 250})
mains.type(" I take this moment to congratulating you on your birthday and expressing all the love I feel towards you.", { delay: 450 })
conc.type("You’re never too busy to listen to my problems and you’ve never told me that my concerns are foolish or irrelevant,", { delay: 150 })
conc.type(" even when they are.", { delay: 250 })
conc.type(" You deserve the world,", { delay: 150 })
conc.type(" but I’ll wish you nothing less than loads of happiness,", { delay: 150 })
conc.type(" love,", { delay: 150 })
conc.type(" and health.", { delay: 250 })
conc.type(" You're beautiful in every way,", { delay: 150 })
conc.type(" Inside and out,", { delay: 150 })
conc.type(" you shine.", { delay: 250 })
conc.type(" I hope this special day,", { delay: 150 })
conc.type(" Brings you joy that's truly divine.", { delay: 150 })
conc.type(" I hope that you face challenges of life with strength and confidence and never give up to the tough times.", { delay: 250 })
conc.type(" I promise that I will always stand by your side,", { delay: 150 })
conc.type(" through the good and the bad.", { delay: 250 })
conc.type(" So,", { delay: 150 })
conc.type(" once again,", { delay: 150 })
conc.type(" happy birthday!", { delay: 250 })
conc.type(" I hope this day is everything you want it to be and more.", { delay: 250 })
conc.type(" And,", { delay: 150 })
conc.type(" most importantly,", { delay: 150 })
conc.type(" I hope you know how wonderful you are,", { delay: 150 })
conc.type(" not just today,", { delay: 150 })
conc.type(" but every day.", { delay: 350 })
sinc.type("With love and admiration,", { delay: 350 })
</script>
  </body>
</html>
