<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <title>Pay Debt</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">

</head>
    <body class="fillups">

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


    <form class="box" action="index.html" action="ShopMate_payment.php" method ="POST">
        <img style="width:150px;height:100px;" src="images/payment.svg" alt="debts are bad">
        <h1>Time to clear debts!</h1><br>
        <input style="padding: 2px 10px;" type="text" name="Email" placeholder="Email" required> <br><br>
        <input style="padding: 2px 10px;" type="text" name="Ncard" placeholder="Name on the card" required> <br><br>
        <input style="padding: 2px 10px;" type="text" name="CNumber" placeholder="Card Number" required> <br><br>
        <input style="padding: 2px 10px;" type="month" name="Edate" required> <br><br>
        <input style="padding: 2px 10px;" type="password" name="CVV" placeholder="Security Code(CVV)" required ><br><br>
        <input type="submit" name="submit" value="Make Payment"> <br>
    </form>


    <?php include 'footer.php';?>
</body>
</html>
