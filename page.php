<?php
session_start();
  $idi=$_POST['userId'];
  $conn = mysql_connect("localhost", "root", "");
  $query="SELECT * FROM sneakersyndicate.personal WHERE userid > $idi LIMIT 8";
  $result = mysql_query($query,$conn);

  if (mysql_num_rows($result)>0) {
  while ($row = mysql_fetch_assoc($result)) {
      $id = $row['Products'];
      $cost = $row['cost'];
      $name = $row['name'] ;
      $userid =$row['userid'];
      $last = $_SESSION['last'];
      ?>
      <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
    <!-- Block2 -->
    <div class="block2">
      <div class="block2-img wrap-pic-w of-hidden pos-relative block2-label">
        <img src=<?php echo $id ;?> height="300px" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
          <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
          </a>

          <div class="block2-btn-addcart w-size1 trans-0-4">
            <!-- Button -->
            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
              Add to Cart
            </button>
          </div>
        </div>
      </div>

      <div class="block2-txt p-t-20">
        <a href="sale.php?page=products&action=add&id=<?php echo $row["userid"] ?>"  class="block2-name dis-block s-text3 p-b-5">
          <?php echo $name ; ?>
        </a>

        <span class="block2-price m-text6 p-r-5">
          <?php echo $cost ; ?>
        </span>
      </div>
    </div>
  </div>
<?php }?>
<li class="loadmore" data-id=<?php echo "$userid";?>>
     See More
</li>
<?php
$_SESSION['last'] = $userid; }
 ?>
