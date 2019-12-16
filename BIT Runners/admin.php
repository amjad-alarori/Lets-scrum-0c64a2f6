<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />
    <title>Admin</title>
  </head>
  <body onload="typeWriter();">
    <div class="navbar">
      <img src="images/BITRunnesLogo_Zondertekst.png" alt="BITRunners" />
      <a href="dashboard.php">Teruggaan</a>
      <a class="active" href="admin.php">Admin page</a>
      <form action="handler.php" method="post">
        <button class="logout" type="submit" name="submit-logout">
          Log uit
        </button>
      </form>
    </div>
    <script src="scripts/typewriter.js"></script>
    <div class="topinfo">
      <h1>
        Goedemorgen Admin!
      </h1>
      <h3 id="typewriter"></h3>
    </div>
    <div class="fullpage">
      Presentie Leerlingen: <br />
      iets
    </div>
  </body>
</html>
