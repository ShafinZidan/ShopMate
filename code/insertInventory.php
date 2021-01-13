<?php
include 'config.php';

// if(isset($_POST['iType']) && isset($_POST['iName'])  && isset($_POST['iPrice'])  && isset($_POST['iStock'])){
  if (isset($_POST['submit'])) {

  $item_type  =  $_POST['iType'];
  $item_name  =  $_POST['iName'];
  $item_price  =  $_POST['iPrice'];
  $item_stock  =  $_POST['iStock'];

  $sql = "INSERT INTO inventory (itemType, itemName, itemPrice, StockRemaining)
        values('$item_type', '$item_name', '$item_price', '$item_stock')";

  $is_inserted = mysqli_query($conn,$sql);

  if($is_inserted){

    echo "<script>
          alert('Item Inserted');
          window.location.href= 'insertInventory.php';
          </script>
    ";
    exit;

  }else{
    echo "<script>
          alert('Opps error, try again');
          window.location.href= 'insertInventory.php';
          </script>
    ";
  }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Inventory</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
  </head>
  <body>

      <body class="fillups">

        <form class="box" action="insertInventory.php" method="post">
          <h1>Enter New Item </h1><br>
          <input type="text" name="iType" placeholder="Item Type" required><br><br>
          <input type="text" name="iName" placeholder="Item Name" required><br><br>
          <input type="text" name="iPrice" placeholder="Item Price" required><br><br>
          <input type="text" name="iStock" placeholder="Stock Remaining"  pattern="[0-9]+" required><br>
          <input type="submit" name="submit" value="Insert">
          <input onclick="window.location.href = 'Admin_InventoryManager.php';" type="button" value="Done Inserting">

        </form>

      </body>

  </body>
</html>
