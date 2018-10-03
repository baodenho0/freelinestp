<?php
session_start();

if (!isset($_SESSION['username'])) {
   header('Location: login.php');
}
?>
<?php 

	include 'config.php';
	
	if (isset($_POST["submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		$new = $_POST["new"];
		$confirm = $_POST["confirm"];
		
		if ($username == "" || $password =="" || $new =="" ) {
			$error = "Không được để trống!";
		}
		else {
			if ($new != $confirm){
				$error = "Nhập lại mật khẩu không trùng khớp!";
			}
			else{
				$kt = "SELECT * FROM `login` WHERE `login`.`username` = '$username' AND `login`.`password` = MD5('$password') ";
				$ktt =mysqli_query($con,$kt);
				$num_rows = mysqli_num_rows($ktt);
				if($num_rows)
				{
					$sql = "UPDATE `login` SET `password` = MD5('$new') WHERE `login`.`username` = '$username' AND `login`.`password` = MD5('$password') ";
					$query = mysqli_query($con,$sql);
					if ($query) {
						unset($_SESSION['username']);
						header('Location: login.php');

					}

				}
				else {
					$error = "Không chính xác!";
				}



			
		}

		}

		
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FBI WARNING</title>
</head>
<body>
	<fieldset style="width: 300px;margin: auto" >
		<legend>FBI WARNING</legend>
	<form action="" method="POST">
		<table border="0">
			<tr>
				<td>Tài khoản: </td>
				<td><input type="text" name='username'></td>
			</tr>
			<tr>
				<td>Mật khẩu cũ: </td>
				<td><input type="password" name='password'></td>
			</tr>
			<tr>
				<td>Mật khẩu mới: </td>
				<td><input type="password" name='new'></td>
			</tr>
			<tr>
				<td>Nhập lại: </td>
				<td><input type="password" name='confirm'></td>
			</tr>
			
			<tr>
				<td> </td>
				<td><input type="submit" name="submit" value="Lưu"></td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<?php 
					if(isset($error)) {
						echo $error;
					}


					 ?>

				</td>
			</tr>
		</table>

	</form>
	</fieldset>	
</body>
</html>
