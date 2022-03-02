<?php
require_once("db.php");
$sql = "SELECT *
FROM   category
RIGHT JOIN product
ON category.id = product.categoryId";
$result = mysqli_query($conn, $sql);
?>