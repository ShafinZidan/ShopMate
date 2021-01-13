<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>New Admin</title>
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

    <form class="box" target="_blank" action="ShopMate_AddNewAdmin.php" method ="POST">
        <img style="width:150px;height:100px;" src="images/new admin.svg" alt="newadmin">
        <h1> New Admin Time! </h1>
        <input style="width:40%; padding: 2px 10px;" type="text" name="ID" placeholder="User Id" required >
        <input style="width:50%; padding: 2px 10px;" type="text" name="name" placeholder="Name" required ><br><br>
        <input style="width:40%; padding: 2px 10px;" type="text" name="number" placeholder="Phone Number" required >
        <input style="width:50%; padding: 2px 10px;" type="email" name="umail" placeholder="Email Address" required ><br><br>
        <input style="width:90%; padding: 2px 10px;" type="password" name="passup" placeholder="Enter New Password" required ><br><br>
 Gender: <input type="radio" id="male" name="gender" value="male">
        <label for="">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="customer">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="customer">Other</label><br><br>
        <!-- <select name="Type">
          <option value="AD"> Admin </option>
          <option value="CS"> Customer </option>
        </select> -->
UserType: <input type="radio" id="customer" name="usertype" value="customer">
       <label for="customer">Customer</label>
       <input type="radio" id="admin" name="usertype" value="admin">
       <label for="admin">ShopOwner</label><br><br>

       <input type="submit" name="submit" value="Continue">
     </form>
     <?php include 'footer.php';?>

</body>
</html>
