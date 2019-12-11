var kerst = new Date("dec 23, 2019 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var kd = kerst - now;

    var days = Math.floor(kd / (1000 * 60 * 60 * 24));
    var hours = Math.floor((kd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((kd % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((kd % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

}, 1000);

var voorjaar = new Date("feb 17, 2020 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var vd = voorjaar - now;

    var days = Math.floor(vd / (1000 * 60 * 60 * 24));
    var hours = Math.floor((vd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((vd % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((vd % (1000 * 60)) / 1000);

    document.getElementById("daysv").innerHTML = days;
    document.getElementById("hoursv").innerHTML = hours;
    document.getElementById("minutesv").innerHTML = minutes;
    document.getElementById("secondsv").innerHTML = seconds;

}, 1000);

var mei = new Date("apr 27, 2020 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var md = mei - now;

    var days = Math.floor(md / (1000 * 60 * 60 * 24));
    var hours = Math.floor((md % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((md % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((md % (1000 * 60)) / 1000);

    document.getElementById("daysm").innerHTML = days;
    document.getElementById("hoursm").innerHTML = hours;
    document.getElementById("minutesm").innerHTML = minutes;
    document.getElementById("secondsm").innerHTML = seconds;

}, 1000);

var zomer = new Date("jul 13, 2020 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var zd = zomer - now;

    var days = Math.floor(zd / (1000 * 60 * 60 * 24));
    var hours = Math.floor((zd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((zd % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((zd % (1000 * 60)) / 1000);

    document.getElementById("daysz").innerHTML = days;
    document.getElementById("hoursz").innerHTML = hours;
    document.getElementById("minutesz").innerHTML = minutes;
    document.getElementById("secondsz").innerHTML = seconds;

}, 1000);