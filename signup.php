<?php
  require 'config.php';
  $db_handle = new DBController();
    $conn = $db_handle->connectDB();
 ?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" href="css1/main.css">
<!--===============================================================================================-->
</head>
  <body>
    <div class="limiter">
  		<div class="container-login100" style="background-image: url('images1/bg-01.jpg');">
  			<div class="wrap-login100">
  				<form class="login100-form validate-form" method="post" action="signup.php">
  					<span class="login100-form-logo">
  						<i class="zmdi zmdi-landscape"></i>
  					</span>

  					<span class="login100-form-title p-b-34 p-t-27">
  						SignUp
  					</span>
            <div class="wrap-input100 validate-input" data-validate = "Enter username">
  						<input class="input100" type="text" name="username" placeholder="Username" >
  						<span class="focus-input100" data-placeholder="&#xf207;"></span>
  					</div>

  					<div class="wrap-input100 validate-input" data-validate="Enter email">
  						<input class="input100" name="email" type="email" name="Email" placeholder="Email" >
  						<span class="focus-input100" data-placeholder="&#xf191;"></span>
  					</div>
            <div class="wrap-input100 validate-input" data-validate = "Enter Phone">
  						<input class="input100" name="Phone" type="Phone" placeholder="Enter your Phone" >
  						<span class="focus-input100" data-placeholder="	&#xe0cd;"></span>
  					</div>

  					<div class="wrap-input100 validate-input" data-validate="Enter password">
  						<input class="input100" type="password" name="password" placeholder="Password" >
  						<span class="focus-input100" data-placeholder="&#xf191;"></span>
  					</div>
            <div class="wrap-input100 validate-input" data-validate="Enter password">
  						<input class="input100" name="cpassword" type="password" placeholder="Confirm Password" >
  						<span class="focus-input100" data-placeholder="&#xf191;"></span>
  					</div>

            <div class="container-login100-form-btn">
  						<button name="submit_btn" type="submit" class="login100-form-btn">
  							SignUp
  						</button>
  					</div>
            <div class="text-center p-t-90">
              <a class="txt1" href="Login.php">
  							Already have an Account ?
  						</a>
            </div>
      </form>
    </div>
  </div>
</div>
      <?php
        if (isset($_POST['submit_btn'])) {
          $username =$_POST['username'];
          $email = $_POST['email'];
          $Phone = $_POST['Phone'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];
          if ($password==$cpassword) {
            # code...
            $conn = mysql_connect("localhost", "root", "");

            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }



            $query = "insert into sneakersyndicate.registration(username,phonenumber,email,password) values('$username','$Phone','$email',md5('$password'))";
            //$query_run= mysqli_query($con,$query);

          /*  if (mysqli_num_rows($query_run)>0) {
              # code...
              echo '<script type "javascrip"> alert("username Already Exist") </script>';
            }
            else {*/
              $retval = mysql_query( $query, $conn );

            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }

            echo "Entered data successfully\n";
            mysql_close($conn);

         //}
       }
      }
       ?>


       <div id="dropDownSelect1"></div>

     <!--===============================================================================================-->
     	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
     <!--===============================================================================================-->
     	<script src="vendor1/animsition/js/animsition.min.js"></script>
     <!--===============================================================================================-->
     	<script src="vendor1/bootstrap/js/popper.js"></script>
     	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
     <!--===============================================================================================-->
     	<script src="vendor1/select2/select2.min.js"></script>
     <!--===============================================================================================-->
     	<script src="vendor1/daterangepicker/moment.min.js"></script>
     	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
     <!--===============================================================================================-->
     	<script src="vendor1/countdowntime/countdowntime.js"></script>
     <!--===============================================================================================-->
     	<script src="js1/main.js"></script>
  </body>
</html>
