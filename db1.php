<?php
$servername="localhost";
$username="root";
$password="";
$db="form";

$con= mysqli_connect($servername,$username,$password,$db);;

if(!$con){
die("CONNECTION FAILED" . mysqli_connect_error());
}
?>