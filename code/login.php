<?php
	include 'config.php';

	session_start();
	$error = "";

	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$myusername = mysqli_real_escape_string($conn,$_POST['username']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['pass']);

		$sql = "SELECT id FROM login WHERE username = '$myusername' and pass = '$mypassword'";
		$result = mysqli_query($conn,$sql);
		$log = mysqli_fetch_array($result,MYSQLI_ASSOC);

		$count = mysqli_num_rows($result);

		if($count == 1) {
			$_SESSION['login_user'] = $myusername;
			header("location: Admin_Dashboard.php");
		}else {
			$error = "Invalid username or password";
		}
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <title>ShopMate login</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">

</head>

  <body class="fillups">

  <?php include 'header.php';?>

      <form class="box" action="" method ="post">
        <img style="width:150px;height:150px;" src="images/login image.svg" alt="login">
        <h1> Welcome to ShopMate! Login or SignUp to Continue</h1><br>
       <input type="text" name="username" placeholder="User Name" required > <br><br>
       <input type="password" name="pass" placeholder="Password"> <br><br>
       <input type="submit" name="login" value="Log In">
      <!-- <code style="color:white;font-family:'Oswald', sans-serif;font-size: 20px;"> or </code> -->
       <input onclick="window.location.href = 'signup.html';" type="button" value="Sign Up">
			  	<?php echo '<p>'.$error.'</p>'; ?>
   </form>


<div style="color:white;text-align:center;font-size:15px;margin-top:200px;margin-bottom:10px;"><h1>What people think of us:</h1></div>
   <div id="slider">
      <input type="radio" name="slider" id="slide1" checked>
      <input type="radio" name="slider" id="slide2">
      <input type="radio" name="slider" id="slide3">
      <input type="radio" name="slider" id="slide4">
      <div id="slides">
         <div id="overflow">
            <div class="inner">
               <div class="slide slide_1">
                  <div class="slide-content">
                     <h2>"The friendly saviour of local shopowners."<br>-Bloomberg</h2>
                  </div>
               </div>
               <div class="slide slide_2">
                  <div class="slide-content">
                     <h2>"ShopMate is helping the community evolve."<br>-Windows Central</h2>

                  </div>
               </div>
               <div class="slide slide_3">
                  <div class="slide-content">
                     <h2>"Digitalizing small businesses one step at a time."<br>-Wired</h2>
                  </div>
               </div>
               <div class="slide slide_4">
                  <div class="slide-content">
                     <h2>"I love ShopMate"<br>-Your local shopowner</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div id="bullets">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>
         <label for="slide4"></label>
      </div>
   </div>

   <div style="color:#6E0DD0;text-align:center;font-size:30px;margin-top:150px;margin-bottom:150px"><h1>Join the Family</h1></div>


<div style="text-align:center;margin-top:50px;">
<img style="padding:10px;width:75px;" src="images/we.png">
<img style="padding:10px;width:100px;" src="images/heart.gif">
<img style="padding:10px;width:150px;" src="images/owners.png">
</div>


   <?php include 'footer.php';?>


 </body>
</html>
