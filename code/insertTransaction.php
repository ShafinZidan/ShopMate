<?php
include 'config.php';

// if(isset($_POST['iType']) && isset($_POST['iName'])  && isset($_POST['iPrice'])  && isset($_POST['iStock'])){
  if (isset($_POST['submit'])) {

  $customer_userId  =  $_POST['customerID'];
  $item_id  =  $_POST['itemID'];
  $amount_paid  =  $_POST['amountPaid'];
  $date_purchased  =  $_POST['datePurchased'];
  $quantity = $_POST['quanTity'];

  $sql = "INSERT INTO transactions (customer_userID,itemID,amount_paid,date_purchased,quantity)
        values('$customer_userId', '$item_id', '$amount_paid','$date_purchased','$quantity')";

  $is_inserted = mysqli_query($conn,$sql);

  if($is_inserted){

    echo "<script>
          alert('Transaction Record Inserted');
          window.location.href= 'insertTransaction.php';
          </script>
          ";
    exit;

  }else{
    echo "<script>
          alert('Opps error, try again');
          window.location.href= 'insertTransaction.php';
          </script>
    ";
  }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Transaction</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
  </head>
  <body>

      <body class="fillups">

        <form class="box" action="insertTransaction.php" method="post">
<h1>Enter New Record</h1><br>
          <input type="text" name="customerID" placeholder="Customer ID" required><br><br>
          <input type="text" name="itemID" placeholder="Item ID" required><br><br>
          <input type="text" name="amountPaid" placeholder="Amount Paid" required><br><br>
          <input type="text" name="datePurchased" placeholder="Date of purchase" required><br><br>
          <input type="text" name="quanTity" placeholder="Quantity" required><br>
          <input type="submit" name="submit" value="Insert">
          <input onclick="window.location.href = 'Admin_TransactionManager.php';" type="button" value="Done Inserting">

        </form>

      </body>

  </body>
</html>
