<?php 
if(isset($_GET['id'])){
    include "db.php";
    function validate($data)
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
    $id = validate($_GET['id']);
    $sql = "DELETE FROM product WHERE ProductId=$id";  
    $result = mysqli_query($conn, $sql);
    
    if ($result)
        {
        header("Location:index");
        }   
    else 
        { 
        header("Location:index"); 
        } 
    } ?>