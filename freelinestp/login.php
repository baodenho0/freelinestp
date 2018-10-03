
<?php 
session_start();
	include 'config.php';
	
	if (isset($_POST["submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			$error = "Không được để trống!";
		}else{
			$sql = "select * from login where username = '$username' and password = MD5('$password') ";
			$query = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				$error ="Không chính xác!";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: admin.php');
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
				<td>Mật khẩu: </td>
				<td><input type="password" name='password'></td>
			</tr>
			
			<tr>
				<td> </td>
				<td><input type="submit"  name="submit" value="Đăng nhập"></td>
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
