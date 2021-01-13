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
          <a href="Customer_DashboardMain.html"><li>Home</li></a>
          <a href="about.html"><li>About</li></a>
              <a href="login.html"><li>Log Out</li></a>
          </ul>
      </div>
   </div>
   <div class="dash">
<h1> CUSTOMER DASHBOARD </h1>

<div class="mothercontainer">
      <div class="container" >
      <button class="btn btn1" onclick="window.location.href = 'Customer_TransactionManager.html';"> Check Transactions  </button> <br>
      <button class="btn btn1" onclick="window.location.href = 'Customer_Debts.html';"> Check Debts </button>
      </div>

      <div class="container1" style="  margin-top: 130px;">
        <button class="btn btn1" onclick="window.location.href = 'Customer_ShopInfo.html';">Shop Info</button> <br>
        <button class="btn btn1" onclick="window.location.href = 'Customer_ShopSummary.html';">Your Summary with Shop</button> <br>
      </div>
</div>
</div>
<?php include 'footer.php';?>


  </body>
</html>
