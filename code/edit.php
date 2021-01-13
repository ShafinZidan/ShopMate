<?php
include 'config.php';

$item_id  = $_GET['itemid'];
$sql = "SELECT * FROM inventory WHERE itemID='$item_id'" ;
$get_item = mysqli_query($conn,$sql );
$row = mysqli_fetch_assoc($get_item);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
  </head>

  <body class="fillups">

    <form class="box" action="update.php?itemid=<?=$row['itemID']?>" method="post">
      <input type="text" name="iType" value="<?=$row['itemType']; ?>"><br>
      <input type="text" name="iName" value="<?=$row['itemName']; ?>"><br>
      <input type="text" name="iPrice" value="<?=$row['itemPrice']; ?>"><br>
      <input type="text" name="iStock" value="<?=$row['StockRemaining']; ?>"><br>
      <input type="submit" name="update" value="Update">
    </form>

  </body>
</html>
