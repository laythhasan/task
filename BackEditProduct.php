<?php
include "db.php";
$query = "SELECT * FROM product WHERE ProductId={$_GET['id']}";
$res = mysqli_query($conn, $query);
$row = $res->fetch_assoc();
if (isset($_POST['update'])) {

    $ProductName = Clean($_POST['ProductName']);
    $Description = Clean($_POST['Description']);
    $Tags = Clean($_POST['Tags']);
    $category = Clean($_POST['category']);






    $sql = "UPDATE `product` SET `Product Name`='$ProductName',`Description`='$Description' , `Tags`='$Tags' , `categoryId`='$category' WHERE ProductId={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        echo '<script>
                alert("تم التحديث بنجاح");
                window.location.href="index";
                </script>';
    } else {
        echo '<script>
                alert("لم تتم عملية التحديث بنجاح");
                window.location.href="index";
                </script>';
    }
}
function Clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
