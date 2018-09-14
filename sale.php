<?php
session_start();
require_once "data.php";
$data = new data();
if ($_SESSION['username']=="") {
header('location:login.php');
}

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
<style>
.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
.example::after {
  content: "";
  clear: both;
  display: table;
}
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
  padding-left: 10%;
  height: 100%;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(bkg-blu.jpg);">
		<h2 class="l-text2 t-center">
			ShoeCom
		</h2>
		<p class="m-text13 t-center">
		</p>
	</section>


	<!-- Content page -->
  <section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">

						<!--  -->
						<h4 class="m-text14 p-b-32">
							Filters
						</h4>

						<div class="filter-color p-t-22 p-b-50 bo3">
							<div class="m-text15 p-b-56">
								Color
							</div>
                <select name="select-profession" id="color" class="custom-select">
                  <option value="1">All</option>
                  <option value="1">All</option>
                  <option value="red">Red</option>
                  <option value="blue">Blue</option>
                  <option value="green">Green</option>
                  <option value="grey">Grey</option>
                  <option value="black">Black</option>
                  <option value="white">White</option>
                </select>
						</div>

            <div class="example">
                <input type="text" id="search_text" placeholder="Search.." name="search">
                <button type="submit" id="hai" class="hai" ><i class="fa fa-search"></i></button>
              </div>
					</div>
				</div>
				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
								<select class="custom-select" id="sorting" name="sorting">
									<option value="1" >Price: low to high</option>
									<option value="2">Price: high to low</option>
								</select>
						</div>
					</div>

					<!-- Product -->
          <div class="row" id="row">

      </div>


      <button class="loadmore">
           See More
      </button>
		</div>
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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-git.min.js" type="text/javascript"></script>


  <script>

  $(document).ready(function(){
    sorting = false;
    searching = false;
    loadmore = false;

    load();
    $("#sorting").change(function(){
      sorting = true;
      load();
    });
    $('#hai').click(function(){
      searching = true;
      load();
    });
    $('.loadmore').click(function(){
      loadmore = true;
      load();
    });
    $('#color').change(function(){
      load();
    });

    function load(){
      var search = $('#search_text').val();
      sorting=true;
      if (search == '') {
        searching = false;
      }
      if (searching == true && sorting == true && loadmore == true) {
        var color = $('#color option:selected').val();
        var sort = $('#sorting option:selected').val();
        var userid = $('.userid').attr('val');
        var search = $('#search_text').val();
        $.post("data.php",{from:userid,queryo:search,sort:sort,color:color},function(data){
          $(data).insertBefore(".userid");
          });
      }
      else if (searching == false && sorting == true && loadmore == true) {

        var userid = $('.userid').attr('val');
        var color = $('#color option:selected').val();
        var sort = $('#sorting option:selected').val();
        $.post("data.php",{from:userid,sort:sort,color:color},function(data){
          $(data).insertBefore(".userid");
          });
      }
      else if (searching == true && sorting == true && loadmore == false) {
        var search = $('#search_text').val();
        var color = $('#color option:selected').val();
        var sort = $('#sorting option:selected').val();
        $.post("data.php",{queryo:search,sort:sort,color:color},function(data){
          $('#row').html(data);
          });
      }
      else if (searching == false && sorting == true && loadmore == false) {
        var sort = $('#sorting option:selected').val();
        var color = $('#color option:selected').val();
        $.post("data.php",{sort:sort,color:color},function(data){
        $('#row').html(data);
        });
      }
      loadmore = false;
    }

});


</script>



</body>
</html>
