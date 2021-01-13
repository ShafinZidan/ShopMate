<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ShopMate Signup</title>
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
        <a href="Admin_Dashboard.html"><li>Home</li></a>
        <a href="about.html"><li>About</li></a>
        <a href="login.html"><li>Log Out</li></a>
        </ul>
    </div>
  </div>

    <form class="box" target="_blank" action="Admin_Dashboard.php" method ="POST">
      <img src="images/welcome.svg" alt="Welcome" style="width:100px;height:100px;">
      <h1>Hello Shop Owner! Please fill your shop details</h1>
       <input style="width:90%; padding: 0px 10px;" type="text" name="ShopName" placeholder="Shop Name" required ><br><br>
       <input style="width:90%; padding: 0px 10px;" type="text" name="ShopAddress" placeholder="Shop Address" required ><br><br>
       <input style="width:40%; padding: 0px 10px;" type="email" name="ShopMail" placeholder="Shop Email" required >
       <input style="width:50%; padding: 0px 10px;" type="text" name="ShopPhone" placeholder="Shop Phone Number" required ><br><br>
       <input type="submit" name="submit" value="Continue"> <br>
     </form>


       <?php include 'footer.php';?>
  </body>
  </html>
