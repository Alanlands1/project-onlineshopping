<?php

      class productacc{
        public function main(){
          if (isset($_POST['product']) && isset($_POST['current'])) {
              $username =$_POST['current'];
              $conn = mysql_connect("localhost", "root", "");
              $query = "SELECT * FROM sneakersyndicate.registration WHERE username = '$username'";
              $result = mysql_query($query,$conn);
              while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
                # code...
                $id = $row['id'];
              }

              $query = "SELECT * FROM sneakersyndicate.personal WHERE registrationid = '$id' LIMIT 16";
              $result = mysql_query($query,$conn);
             if(mysql_num_rows($result)){
              while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
                  $id = $row['Products'];
                  $cost = $row['cost'];
                  $name = $row['name'] ;
                  $userid =$row['userid'];
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
                        <a href="myaccount.php?page=products&action=add&id=<?php echo $row["userid"]; ?>"><button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" name="view_button" >
    											View/Delete
    										</button></a>
                      </div>
                    </div>
                  </div>
                  <div class="block2-txt p-t-20">
                    <a href="sale.php?page=products&action=add&id=<?php echo $row["userid"]; ?>"  class="block2-name dis-block s-text3 p-b-5">
                      <?php echo $name ; ?>
                    </a>

                    <span class="block2-price m-text6 p-r-5">
                      <?php echo $cost ; ?>
                    </span>
                  </div>
                </div>
              </div>
            <?php }?>
            <?php
         }
       }

          elseif (isset($_POST['current'])){
            # code...
            $username =$_POST['current'];
          $conn = mysql_connect("localhost", "root", "");
          $sql = "SELECT * FROM sneakersyndicate.registration WHERE username = '$username'";

          $result = mysql_query($sql,$conn);

          while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
              $email = $row['email'];
              $name =$row['username'];
              $phonenumber =$row['phonenumber'];
              $id = $row['id'];
          }
          $sql = "SELECT count(*) as total FROM sneakersyndicate.personal WHERE registrationid = '$id'";
          $result = mysql_query($sql,$conn);
          $data=mysql_fetch_assoc($result ,MYSQLI_ASSOC);
            ?>
            <div class="col-md-6 p-b-50">
                <h4 class="m-text26 p-b-36 p-t-15">
                  My Account
                </h4>
                  <label>
                    User Name :
                    <div class="bo4 of-hidden size15 m-b-50">
                      <input class="sizefull s-text7 p-l-22 p-r-52" type="text" id="username" value="<?php echo $name; ?>">
                    </div>
                  </label>
                  <br>
                  <label>
                    Phone Number :
                    <div class="bo4 of-hidden size15 m-b-50">
                      <input class="sizefull s-text7 p-l-22 p-r-52" type="text" id="phonenumber" value="<?php echo $phonenumber; ?> ">
                    </div>
                  </label>
                  <br>
                  <label>
                    Email :
                    <div class="bo4 of-hidden size15 m-b-50">
                      <input class="sizefull s-text7 p-l-22 p-r-52" type="text" id="email" value="<?php echo $email ?>">
                    </div>
                  </label>
                  <br>
                  <label>
                    No Of Product :
                    <?php echo $data['total'] ; ?>
                    <div class="w-size2 p-t-25">
                    <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4"  id="change" class="change" >My Products</button>
                  </div>

                  </label>
            </div>
            <?php
          }
        }
      }
      $productacc = new productacc();
      $productacc = $productacc->main();
?>
