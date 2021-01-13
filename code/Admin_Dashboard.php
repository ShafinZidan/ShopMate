<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
  </head>
  <body class="bodydash">
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
<h1> ADMIN DASHBOARD</h1>


<div class="mothercontainer">

  <div class="container">
        <button class="btn btn1" onclick="window.location.href = 'Admin_InventoryManager.html';">  Inventory Manager  </button><br>
        <button class= "btn btn1" onclick="window.location.href = 'Admin_TransactionManager.html';"> Transaction Manager </button> <br>
        <button class="btn btn1" onclick="window.location.href = 'Admin_Debts.html';"> Debt Manager </button>
    </div>

  <div class="container1">
    <button class="btn btn1" onclick="window.location.href = 'Admin_MonthlyReport.html';">  View Monthly Report  </button><br>
    <button class= "btn btn1" onclick="window.location.href = 'Admin_AdminManager.html';">Manage/Add Admins  </button> <br>
    <button class="btn btn1" onclick="window.location.href = 'Admin_CustomerManager.html';"> Manage/Add Customers </button><br>
    <button class="btn btn1" onclick="window.location.href = 'Admin_SetGoal.html';"> Set Monthly Transaction Goal </button>

  </div>

</div>
</div>

<?php include 'footer.php';?>
  </body>
</html>
