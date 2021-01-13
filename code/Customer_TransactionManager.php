<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> Customer Transactions </title>
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
          <a href="Customer_DashboardMain.html"><li>Home</li></a>
          <a href="about.html"><li>About</li></a>
          <a href="login.html"><li>Log Out</li></a>
          </ul>
      </div>
   </div>

<div class="dash">
      <h1> Your Transactions </h1><br><br>

      <form class="search" action="action_page.php">
        <input type="text" placeholder="Search by Item Name" name="search">
        <button type="submit">go</button>
      </form><br>
</div>

      <table class="content-table">
        <thead>
        <tr>
          <th> Customer Name </th>
          <th> Item Name </th>
          <th> Item Price </th>
          <th> Amount Paid(tk.) </th>
          <th> Date Purchased </th>

        </tr>
        </thead>
        <tbody>
        <tr>

          <td>  Justin Bieber </td>
          <td> Pepsi 50 mL </td>
          <td> 25 </td>
          <td>  25 </td>
          <td>  01/04/2020 </td>
        </tr>

        </tbody>
      </table>
      <br><br><br>


  <?php include 'footer.php';?>

      <!-- <input type="submit" name="Add" value="Add Item"> <br>
      <input type="submit" name="Delete" value="Delete Item"> <br>
      <input type="submit" name="Change" value="Change Item"> <br> -->
  </body>
  </html>
