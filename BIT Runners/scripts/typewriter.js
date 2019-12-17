var i = 0;
var txt = 'Welkom op de administrator pagina!';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("typewriter").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
