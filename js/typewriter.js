console.log("typewriter.js good!");
var i = 0;
var txt = '$ cd ~/home'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("home_type").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}