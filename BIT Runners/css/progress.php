<?php
header("Content-type: text/css");
$presentiebar = $_COOKIE["presentiepercentage"];
?>
.container {
height: 30px;
border: 1px solid black;
width: 100%;
background-color: #f5f6fa;
}
.presentiebar {
transition-duration: 0.4s;
display: flex;
justify-content: center;
align-items: center;
height: 28px;
color: #f5f6fa;
width: <?= $presentiebar ?>%;
background-image: linear-gradient(to bottom right, #d980fa, #9980fa);
}