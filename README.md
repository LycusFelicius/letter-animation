# letter-animation
simple letter animation with svg signature animation

## tools used
1. [TypeIt JS Plugin](https://www.typeitjs.com/) for typing animation
2. Bootstrap
3. [Figma](https://www.figma.com/) for creating svg signature

### note
1. [Full tutorial of creating svg animation](https://www.youtube.com/watch?v=ASWNkjS9mG8)
2. you can add background music by adding this code above ```const sign = new TypeIt("#sign", { ```
```
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
```
