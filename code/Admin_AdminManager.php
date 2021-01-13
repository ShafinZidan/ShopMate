<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title> Admin Manager </title>
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
      <h1> Manage Your Store Admins </h1><br><br>

      <form class="search" action="action_page.php">
        <input type="text" placeholder="Search by Name/ID" name="search">
        <button type="submit">go</button>
      </form><br>
  </div>

      <table class="mtable">
        <thead>
        <tr>
          <th>Admin ID</th>
          <th>Admin Name </th>
          <th>Gender</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td> 17329 </td>
          <td> Neymar DeSilva </td>
          <td>Male</td>
        </tr>

        </tbody>
      </table>
      <br><br>

      <div class=editinfo>
            <input type="button" name="Add" value="Add New Admin">
            <input type="button" name="Delete" value="Remove Admin">
      </div>
      <?php include 'footer.php';?>
      <!-- <input type="submit" name="Add" value="Add Item"> <br>
      <input type="submit" name="Delete" value="Delete Item"> <br>
      <input type="submit" name="Change" value="Change Item"> <br> -->
  </body>
  </html>
