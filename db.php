<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "task";
$conn = mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die('Please Check Your Connection');
}
?>