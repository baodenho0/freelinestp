<?php
session_start();

if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}
?>

<?php 
include 'config.php';
if(isset($_POST['sublink'])){
	$link = $_POST['link'];
	//echo $link;
	$sql = "UPDATE `link` SET `url` = '$link' WHERE `link`.`id` = 1";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật thành công";
	}
	else {
		echo "Cập nhật thất bại";
	}
}

if(isset($_POST['sublink1'])){
	$link = $_POST['link1'];
	//echo $link;
	$sql = "UPDATE `link` SET `url` = '$link' WHERE `link`.`id` = 2";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật 1 thành công";
	}
	else {
		echo "Cập nhật 1 thất bại";
	}
}
if(isset($_POST['sublink2'])){
	$link = $_POST['link2'];
	//echo $link;
	$sql = "UPDATE `link` SET `url` = '$link' WHERE `link`.`id` = 3";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật 2 thành công";
	}
	else {
		echo "Cập nhật 2 thất bại";
	}
}

if(isset($_POST['sublink3'])){
	$link = $_POST['link3'];
	//echo $link;
	$sql = "UPDATE `link` SET `url` = '$link' WHERE `link`.`id` = 4";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật 3 thành công";
	}
	else {
		echo "Cập nhật 3 thất bại";
	}
}

if(isset($_POST['sublink4'])){
	$link = $_POST['link4'];
	//echo $link;
	$sql = "UPDATE `link` SET `url` = '$link' WHERE `link`.`id` = 5";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật 4 thành công";
	}
	else {
		echo "Cập nhật 4 thất bại";
	}
}
 ?>
  <a href="admin.php">Back</a>