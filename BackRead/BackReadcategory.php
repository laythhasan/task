<?php 
require_once("db.php");
$sql = "SELECT * FROM category";
$result = mysqli_query($conn,$sql);
