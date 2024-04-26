<?php
$databasehost="localhost";
$password="";
$user="root";
$databasename="";

$conn = mysqli_connect($databasehost,$password,$user,$databasename);

if(!$conn){
    echo "Something went wrong";
}
?>