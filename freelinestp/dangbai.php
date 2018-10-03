<?php
session_start();

if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}
?>

<?php 
include 'config.php';
if(isset($_POST['submit'])){

	$tieude1 = $_POST['tieude1'] ;
	$noidung1 = $_POST['noidung1'];
	$tieude2 = $_POST['tieude2'] ;
	$noidung2 = $_POST['noidung2'];
	$tieude3 = $_POST['tieude3'] ;
	$noidung3 = $_POST['noidung3'];
	//$tieude1 = "con cặc";
	//$noidung1 =" ddmfmwadf á";
	//echo $tieude1.$noidung1;

	$sql1 = "UPDATE `baidang` SET `tieude` = N'$tieude1', `noidung` = N'$noidung1' WHERE `baidang`.`id` = 1";
	$sql2 = "UPDATE `baidang` SET `tieude` = N'$tieude2', `noidung` = N'$noidung2' WHERE `baidang`.`id` = 2";
	$sql3 = "UPDATE `baidang` SET `tieude` = N'$tieude3', `noidung` = N'$noidung3' WHERE `baidang`.`id` = 3";
	if(mysqli_query($con,$sql1)){
		echo "Cập nhật nội dung 1 thành công!<br>";
	}
	else {
		echo "Cập nhật nội dung 1 thất bại<br>";
	}
	if(mysqli_query($con,$sql2)){
		echo "Cập nhật nội dung 2 thành công!<br>";
	}
	else {
		echo "Cập nhật nội dung 2 thất bại<br>";
	}
	if(mysqli_query($con,$sql3)){
		echo "Cập nhật nội dung 3 thành công!<br>";
	}
	else {
		echo "Cập nhật nội dung 3 thất bại<br>";
	}

}
if(isset($_POST['submit1'])){
	$tieude4 = $_POST['tieude4'] ;
	$noidung4 = $_POST['noidung4'];
	//echo $tieude4.$noidung4;
	$sql = "UPDATE `baidang` SET `tieude` = N'$tieude4', `noidung` = N'$noidung4' WHERE `baidang`.`id` = 4";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật bài đăng 1 thành công!<br>";
	}
	else {
		echo "Cập nhật bài đăng 1 thất bại<br>";
	}


}

if(isset($_POST['submit2'])){
	$tieude5 = $_POST['tieude5'] ;
	$noidung5 = $_POST['noidung5'];
	$sql = "UPDATE `baidang` SET `tieude` = N'$tieude5', `noidung` = N'$noidung5' WHERE `baidang`.`id` = 5";
	if(mysqli_query($con,$sql)){
		echo "Cập nhật bài đăng 2 thành công!<br>";
	}
	else {
		echo "Cập nhật bài đăng 2 thất bại<br>";
	}


}
 

 ?>
 <a href="admin.php">Back</a>
