<?php
/*
if(mysql_connect('localhost','root','')){
mysql_select_db('work');
}else
echo mysql_error();*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname="work";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>