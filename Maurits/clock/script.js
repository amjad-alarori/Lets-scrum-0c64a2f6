var target = document.getElementById("target");
var time = document.getElementById("time");
var seconds;
var countdownTimer;
function countdown() {

    var days = Math.floor(seconds / 24 / 60 / 60);

    var hoursLeft = Math.floor((seconds) - (days * 86400));
    var hours = Math.floor(hoursLeft / 3600);

    var minutesLeft = Math.floor((hoursLeft) - (hours * 3600));
    var minutes = Math.floor(minutesLeft / 60);

    var remainingSeconds = seconds % 60;
    function pad(n) {
        return (n < 10 ? "0" + n : n);
    }
    target. innerHTML = pad(hours) + ":" + pad(minutes) + ":" + pad(remainingSeconds);
    if (seconds === 0) {
        clearInterval(countdownTimer);
        document.getElementById("target"). innerHTML = "Completed!"
    } else {
        seconds --;
    }
}
function run() {
    time = time.value;
    var split_time = time.split(":");
    var uren = Number(split_time[0]);
    var minuten = Number(split_time[1]);
    seconds = uren * 3600 + minuten * 60;

    countdownTimer = setInterval("countdown()", 1000);
}

