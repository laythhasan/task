<?php include "BackEditProduct.php"; ?>

<?php include "Shared/Header.php" ?>

<body>
    
<div class="container">
<form action=""  method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="ProductName">ProductName</label>
      <input type="text" name="ProductName" class="form-control" value="<?= $row['Product Name'] ?>" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Description">Description</label>
      <input type="text" name="Description" class="form-control" value="<?= $row['Description'] ?>" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="Tags">Tags</label>
      <input type="text" name="Tags" class="form-control" value="<?= $row['Tags'] ?>" required>
    </div>
  </div>


<div class="form-row">
  <div class="col-md-12">
    <label for="price" class="form-label">Category </label>

    <?php include "BackRead/BackReadcategory.php"; ?>

    <select type="text" class="form-control" placeholder="Category ID"  name="category" value="<?= $row['Category'] ?>
        <?php
          while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <Option value="<?php echo $rows['id']; ?>">
                <?php echo $rows['Category']; ?></Option>

        <?php } ?>
    </select>
  </div>
</div>



  <button type="submit" name="update" class="btn btn-primary mt-5">update</button>
</form>
</div>

</body>
</html>