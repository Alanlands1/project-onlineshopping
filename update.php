<?php
if (isset($_POST['username'])&& isset($_POST['phonenumber']) &&isset($_POST['email'])&&isset($_POST['current'])){
# code...
$name = $_POST['current'];
$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$conn = mysql_connect("localhost", "root", "");
$sql = "UPDATE sneakersyndicate.registration SET username = '$username' , phonenumber = '$phonenumber' , email = '$email'  WHERE username = '$name'";
$result = mysql_query($sql,$conn);
}

 ?>
