<?php

function openConn(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "jobs";


    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection failed", $conn -> error);
    return $conn;
}


function closeConn(){
    $conn -> close()
}



