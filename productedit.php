<?php
session_start();
if ($_SESSION['username']=="") {
header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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
	<?php


	$conn = mysql_connect("localhost", "root", "");
	$iduser= $_SESSION['productid'];
	$usrid = $_SESSION['usrid'];
	//  $product_array = $db_handle->runQuery("SELECT * FROM sneakersyndicate.personal ORDER BY id ASC");
		$query="SELECT * FROM sneakersyndicate.personal WHERE userid = $iduser ORDER BY userid ASC";
		$result = mysql_query($query,$conn);
		$sql ="SELECT phonenumber,email FROM sneakersyndicate.registration WHERE id = $usrid ";
		$query_result = mysql_query($sql,$conn);
		while ($row = mysql_fetch_assoc($query_result, MYSQLI_ASSOC)) {
			$phonenumber = $row['phonenumber'];
			$emailid = $row['email'];
		}

		while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
			$pic = $row['Products'];
			$name = $row['name'];
			$cost = $row['cost'];
			$Discription = $row['Discription'];
			$color=$row['color'];
			$size=$row['size'];
			$additionalin=$row['additionalinformation'];
		}

?>


	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?php echo $pic ; ?>">
							<div class="wrap-pic-w">
								<img src="<?php echo $pic ; ?>" height="400px" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo "$name"; ?>
				</h4>

				<span class="m-text17">
					<?php echo "$cost"; ?>
				</span>

				<p class="s-text8 p-t-10">
					<?php echo "$Discription"; ?>
				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>
						<a >
							<?php echo $size ; ?>
						</a>
					</div>

					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>
						<a >
							<?php echo $color ; ?>
						</a>
					</div>
							<div class="flex-m flex-w p-b-10">
								<div class="s-text15 w-size15 t-center">
									Phone
								</div>
								<a >
									<?php echo $phonenumber ; ?>
								</a>
							</div>

							<div class="flex-m flex-w p-b-10">
								<div class="s-text15 w-size15 t-center">
									Email
								</div>
								<a >
									<?php echo $emailid ; ?>
								</a>


								<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">

								</div>
							</div>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo "$Discription"; ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $additionalin ?>
					</div>
				</div>
      </br>
    </br>
  </br>
  <form class="login100-form validate-form" method="post" action="productedit.php">

        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="delete" type="submit">
          Delete Product
        </button>
			</div>
</form>
		</div>
	</div>
    <!-- Button -->
    <?php
    if (isset($_POST['delete'])) {
      $conn = mysql_connect("localhost", "root", "");
      $sql = "DELETE  FROM sneakersyndicate.personal WHERE Products = '$pic'";
      $result = mysql_query($sql,$conn);
      if (mysql_query($sql,$conn)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysql_error($conn);
      }
      $file = $pic;
      if (!unlink($file))
      {
        echo ("Error deleting $file");
      }
      else
      {
        echo ("Deleted $file");
        header('location:myaccount.php');
      }

    }


?>
	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">

	</section>


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
						<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
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

		<div class="t-center p-l-15 p-r-15">
			shoecommedia
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
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Wait...");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Wait...");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Wait...");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
