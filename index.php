<?php include "BackRead/BackReadProduct.php" ?>
<?php include "Shared/Header.php" ?>


<body>
<div class="container">
<?php if (mysqli_num_rows($result)) { ?>    
<table class="table table-striped" id="myTable">
        <thead>
            <tr>
              <th>#</th>
              <th>Product Name</th>  
              <th>Description</th>
              <th>Tags</th>
              <th>createdAt</th>
              <th>updatedAt</th>
              <th>category</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
     while ($rows = mysqli_fetch_assoc($result)) {
    ?>
            <tr>
                <td><?php echo $rows['ProductId']; ?></td>
                <td><?php echo $rows['Product Name']; ?></td>
                <td><?php echo $rows['Description']; ?></td>
                <td><?php echo $rows['Tags']; ?></td>
                <td><?php echo $rows['createdAt']; ?></td>
                <td><?php echo $rows['ubatedAt']; ?></td>
                <td><?php echo $rows['Category']; ?></td>
                <td>
                    <a href="EditProduct?id=<?= $rows['ProductId'] ?>" class="btn btn-success">Edit</a>
                    <a href="DeleteProduct?id=<?= $rows['ProductId'] ?>" class="btn btn-danger">Delete</a>
                </td>
               
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>

</div>



</body>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>
</html>