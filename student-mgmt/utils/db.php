<?php
require_once"./helpers.php";

$serverName="localhost";
$username="root";
$password="";
$databaseName="studentmgmt";
$conn =new mysqli($serverName,$username,$password,$databaseName);   

if(!$conn->connect_error){
    die("connection failed!");
    }
?>