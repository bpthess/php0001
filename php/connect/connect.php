<?php
$host = "localhost";
$user = "typortfolio";
$pass = "life280384!!";
$db ="typortfolio";
$connect = new mysqli($host, $user, $pass, $db);
$connect -> set_charset("utf8");

//false 
if(mysqli_connect_errno()){
    echo "DATEBASE connect False";
} else {
    //echo "DATEBASE connect true";
}

?>