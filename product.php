<?php
require 'config.php';
session_start();
$db_handle = new DBController();
  $conn = $db_handle->connectDB();
  if ($_SESSION['username']=="") {
  header('location:login.php');
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
  <header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					a Be A “Be You” Community
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						<?php
              $username = $_SESSION['username'];

            $conn = mysql_connect("localhost", "root", "");
            $sql = "SELECT * FROM sneakersyndicate.registration WHERE username = '$username'";

            $result = mysql_query($sql,$conn);

            while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
                $id = $row['email'];
                $name=$row['username'];
                echo $id;
            }


?>
					</span>
				</div>
			</div>


			<?php



			?>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="sneaker syndicate-01.png" style="margin-top:30px;" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="sale.php">Shop</a>
							</li>
							<li>
								<a href="product.php">Add Product</a>
							</li>
              <li>
                <a href="blog.php">Blog</a>
              </li>
							<li>
								<a href="about.php">About</a>
							</li>

						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						<div class="topbar-language rs1-select2">
              <select class="selection-1" size="1" name="links" onchange="window.location.href=this.value;">
                <option value = "index.php">_______Home______</option>
              <option value="myaccount.php">_______Account___</option>
                  <option value="login.php">_______Logout____</option>
              </select>
						</div>

					<span class="linedivide1"></span>


				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="sneaker syndicate-01.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
            <select class="selection-1" size="1" name="links" onchange="window.location.href=this.value;">
              <option>user</option>
              <option value="myaccount.php">My Account Info</option>
              <option value="login.php">Logout</option>
            </select>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							<?php
								$username = $_SESSION['username'];

							$conn = mysql_connect("localhost", "root", "");
							$sql = "SELECT * FROM sneakersyndicate.registration WHERE username = '$username'";

							$result = mysql_query($sql,$conn);

							while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
									$id = $row['email'];
									echo $id;
							} ?>
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?php echo $id ?>
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="sale.php">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Add Product</a>
					</li>
          <li class="item-menu-mobile">
            <a href="blog.php">Blog</a>
          </li>
					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(bkg-blu.jpg);">
		<h2 class="l-text2 t-center">
			Add Product
		</h2>
	</section>

	<!-- content page -->
  <form class="myform" action="product.php" method="post" enctype="multipart/form-data" >
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
						<h4 class="m-text26 p-b-36 p-t-15">
							Add Product
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="namee" placeholder="Brand">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="cost" placeholder="Cost in dollars">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="Description" placeholder="Description">
						</div>
            <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="additional" placeholder="Additional information">
						</div>
            <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="size" placeholder="size">
						</div>
            <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="color" placeholder="color">
						</div>
            <div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="noofshoes" placeholder="No of Shoes">
						</div>
            <input type="file" name="file"  id="image" style="visibility:hidden">

            <div class="w-size66">
							<!-- Button -->
							<input type="button" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="margin-bottom:10px" onclick="document.getElementById('image').click()" value="cLICK TO uPLOAD">
						</div>

						<div class="w-size66">
							<!-- Button -->
							<input name="upload" type="submit" id="upload" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" value="Upload">

            </br>
          </br>
						</div>
				</div>
			</div>
		</div>
	</section>
</form>
<?php
if (isset($_POST['upload'])) {

        $conn = mysql_connect("localhost", "root", "");
        $name       = $_FILES['file']['name'];
        $temp_name  = $_FILES['file']['tmp_name'];
        $username = $_SESSION['username'];
        $Discription = $_POST['Description'];
        $productname = $_POST['namee'];
        $cost = $_POST['cost'];
        $additionalin=$_POST['additional'];
        $size=$_POST['size'];
        $color=$_POST['color'];
        $noofshoes=$_POST['noofshoes'];
      //  echo "$temp_name";
        if (!$conn) {
          echo "Unable to connect to DB: " . mysql_error();
          exit;
        }

        if (!mysql_select_db("sneakersyndicate")) {
          echo "Unable to select mydbname: " . mysql_error();
          exit;
        }
        $query="SELECT * from registration where username = '$username'";
        $result = mysql_query($query,$conn);

        while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
            $id = $row['id'];
        }


              $location = "C:/wamp/www/ShoeCom/Uploads/";

              if(move_uploaded_file($temp_name, "C:/wamp/www/ShoeCom/Uploads/".$name)){
                $query="INSERT into personal (Products,registrationid,name,cost,Discription,additionalinformation,color,size,noofshoes) values('../ShoeCom/Uploads/$name' ,$id,'$productname','$cost','$Discription','$additionalin','$color','$size','$noofshoes')";

                $retval = mysql_query( $query, $conn );

              if(! $retval ) {
                 die('Could not enter data: ' . mysql_error());
              }

              echo "Entered data successfully\n";
              mysql_close($conn);
          }  else {
            echo 'You should select a file to upload !!';
          }
        }
?>






	<!-- Footer -->
  <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? <br>
						 Contact info <br>
							Samuel Babu <br>
							555 W Madison st <br>
							Chicago IL60661 <br>
							3126629927
					</p>

					<div class="flex-m p-t-30">
						<a href="https://www.facebook.com/samuelpbabu" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="https://www.instagram.com/prince_shoechi/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					</div>
				</div>
			</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="" class="s-text7">
							Contact Us
						</a>
					</li>
				</ul>
			</div>
			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Subscribe
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-2 p-r-2">
			Copyright © 2018 All rights reserved. | This template is made with by Colorlib 
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
