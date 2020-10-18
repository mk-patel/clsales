<?php

$conn = mysqli_connect("localhost", "root", "", "clsales");
$mysqli = new mysqli("localhost", "root", "", "clsales");

if(!$conn){
    die("Connection Failed, Please Try Again !!".mysqli_connect_error());
}

?>