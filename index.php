<?php
require_once("config.php");
$db_handle = new DBController();
$db_handle->connectDB();
$expire = 365*24*3600; // We choose a one year duration

ini_set('session.gc_maxlifetime', $expire);

session_start(); //We start the session

setcookie(session_name(),session_id(),time()+$expire);


if ($_SESSION['username']=="") {
header('location:login.php');
}

$_SESSION['index'] = 0;



if(isset($_GET['action']) && $_GET['action']=="add"){

        $id=intval($_GET['id']);
        $conn = mysql_connect("localhost", "root", "");

            $_SESSION['productid'] = $id;
            $query="SELECT * FROM sneakersyndicate.personal WHERE userid = '$id' ";
            $result = mysql_query($query,$conn);

            while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
              $usrid = $row['registrationid'];
              $_SESSION['usrid']=$userid;
              header('location:product-detail.php');
            }


        }

 ?>



<!DOCTYPE html>

<html lang="en">
<head>
	<title>Home</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script>
.loadmore{

}
</script>
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
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(new.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							Sneakers
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="sale.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(new2.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							Sneakers
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="sale.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(new1.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
							sneakers
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="rotateInUpRight">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="sale.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner -->


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Tab panes -->
				<div class="tab-content p-t-35">
  					<!-- - -->
  					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
  						<div class="row">
              <?php
                $conn = mysql_connect("localhost", "root", "");
            //  $product_array = $db_handle->runQuery("SELECT * FROM sneakersyndicate.personal ORDER BY id ASC");
              $query="SELECT * FROM sneakersyndicate.personal ORDER BY userid ASC lIMIT 8";
              $result = mysql_query($query,$conn);

              while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
                  $idpro = $row['Products'];
                  $cost = $row['cost'];
                  $name = $row['name'] ;
                  $userid=$row['userid'];
              ?>
              <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="<?php echo $idpro ; ?>" height="300px" alt="IMG-PRODUCT">

                    <div class="block2-overlay trans-0-4">
                      <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                      </a>

                      <div class="block2-btn-addcart w-size1 trans-0-4">
                        <!-- Button -->
                        <a href="index.php?page=products&action=add&id=<?php echo $row["userid"]; ?>"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="view_button" >
    											View
    										</button></a>
                      </div>
                    </div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="index.php?page=products&action=add&id=<?php echo $row['userid'] ?>" class="block2-name dis-block s-text3 p-b-5">
											<?php echo "$name"; ?>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<?php echo "$cost"; ?>
										</span>
									</div>
								</div>
							</div>
              <?php
            } ?>




			</div>
		</div>
  </div>
	</section>


	<!-- Banner video -->
	<section class="parallax0 parallax100" style="background-image: url(new1.jpg);">
		<div class="overlay0 p-t-190 p-b-200">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<span class="m-text9 p-t-45 fs-20-sm">
		        ShoeCom
				</span>
			</div>
		</div>
	</section>

	<!-- Instagram -->
	<section class="instagram p-t-100">
		<div class="sec-title p-b-52 p-l-15 p-r-15">
			<h3 class="m-text5 t-center">
				@Instagram
			</h3>
		</div>

		<div class="container">
			<!-- Block4 -->
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
      <div class="elfsight-app-6d623839-8757-4c86-b338-f4c79b9db77e"></div>
		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					 Delivery By Yourself
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Wait..");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Wait..");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
