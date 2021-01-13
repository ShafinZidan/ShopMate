<?php include'config.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> Inventory Manager </title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">

  </head>
  <body class="bodydash" style="color:white;">

    <div class="header">
      <div class="inner_header">
        <div class="logo_container">
          <img src="images/logo 2.svg" alt="ShopMate logo" style="width:70px;height:70px;">
          <h1>Shop<span>Mate</span></h1>
        </div>
        <ul class="navigation">
            <a href="Admin_Dashboard.html"><li>Home</li></a>
          <a href="about.html"><li>About</li></a>
            <a href="login.html"><li>Log Out</li></a>
          </ul>
      </div>
   </div>
<div class="dash">
      <h1> Inventory </h1><br>
      <br>

      <form class="search" action="action_page.php">
        <input type="text" placeholder="Search by Item Name" name="search">
        <button type="submit">go</button>
      </form><br>
</div>

<table class="content-table">

<?php
        $sql = "SELECT * FROM inventory" ;
        $get_data = mysqli_query($conn,$sql );

        if(mysqli_num_rows($get_data) > 0){

          echo '
            <thead>
            <tr>
              <th> Item ID </th>
              <th> Item Type </th>
              <th> Item Name </th>
              <th> Item Price </th>
              <th> Stock Remaining </th>
              <th> Update Stock </th>
             <th> Remove Item </th>
            </tr>
            </thead>';
            while ($row = mysqli_fetch_assoc($get_data)) {

              echo '
                <tbody>
                  <tr>
                      <td>'.$row['itemID'].'</td>
                      <td>'.$row['itemType'].'</td>
                      <td>'.$row['itemName'].'</td>
                      <td>'.$row['itemPrice'].'</td>
                      <td>'.$row['StockRemaining'].'</td>

                  <td> <a href="edit.php?itemid='.$row['itemID'].'">Edit</a> </td>
                  <td> <a href="inventorydelete.php?itemid='.$row['itemID'].'">Delete</a> </td>

                  </tr>
                </tbody>';
            }
          }
          ?>
      </table>

      <div class=editinfo>
            <input onclick="window.location.href = 'insertInventory.php';" type="button" value="Add Item">
      </div>


      <?php include 'footer.php';?>
      <!-- <input type="submit" name="Add" value="Add Item"> <br>
      <input type="submit" name="Delete" value="Delete Item"> <br>
      <input type="submit" name="Change" value="Change Item"> <br> -->
  </body>
  </html>
