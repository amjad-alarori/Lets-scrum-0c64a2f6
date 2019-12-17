<?php
header("Content-type: text/css");
$presentiebar = $_COOKIE["presentiepercentage"];
?>
.container {
    width: 100%;
    background-color: #CE93D8;
}   
.presentiebar {
    color: black;
    width: <?=$presentiebar?>%;
    background-image: linear-gradient(to bottom right, #d980fa, #9980fa);
}