<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Your Debts </title>
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
      <h1> Debts Manager </h1><br><br>

      <form class="search" action="action_page.php">
        <input type="text" placeholder="Search by Name" name="search">
        <button type="submit">go</button>
      </form><br>
<div class=editinfo>
      <input type="button" name="Add" value="Add Debt">
      <input type="button" name="Delete" value="Remove Debt">
      <input type="button" name="Change" value="Edit Debt">
</div>
</div>
      <table class="content-table">
        <thead>
        <tr>
          <th> Customer Name</th>
          <th> Amount Payable </th>
          <th> Date Due </th>
        </tr>
        </thead>
        <tbody>

        <tr>
          <td> Shawn Mendes </td>
          <td> 2500tk. </td>
          <td> 6/2021 </td>
        </tr>

        </tbody>
      </table><br>

<button onclick="location.href='Customer_payment.html';" class="btn btn1">Make Payment</button>
<br><br><br>

<?php include 'footer.php';?>
  </body>
  </html>
