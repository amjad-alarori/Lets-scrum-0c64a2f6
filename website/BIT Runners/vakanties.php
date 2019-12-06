<!doctype html>

<head>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/vakanties.css">
    <title>vakanties</title>
</head>

<body>
    <div class="navbar">
        <img src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners">
        <a href="dashboard.php">Home</a>
        <a href="#nieuws">Nieuws</a>
        <a href="#timer">Focus Timer</a>
        <a class="active" href="vakanties.php">Vakanties</a>
        <a href="planning.php">Planning</a>
        <a href="#overzicht">Absentie</a>
    </div>

    <div class="content">
        <div class="vacay-container" id="kerstvakantie">
            <h1>Kerstvakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="days">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hours">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutes">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="seconds">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="voorjaarsvakantie">
            <h1>Voorjaarsvakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysv">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursv">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesv">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsv">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="meivakantie">
            <h1>Meivakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysm">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursm">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesm">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsm">00</span>
                    Seconden
                </div>
            </div>
        </div>
        <div class="vacay-container" id="zomervakantie">
            <h1>Zomervakantie</h1>
            <div class="timer">
                <div class="countd">
                    <span id="daysz">00</span>
                    Dagen
                </div>
                <div class="countd">
                    <span id="hoursz">00</span>
                    Uren
                </div>
                <div class="countd">
                    <span id="minutesz">00</span>
                    Minuten
                </div>
                <div class="countd">
                    <span id="secondsz">00</span>
                    Seconden
                </div>
            </div>
        </div>

        <script type="text/javascript">
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
        </script>

        <script type="text/javascript">
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
        </script>

        <script type="text/javascript">
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
        </script>
        <script type="text/javascript">
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
        </script>



</body>

</html>