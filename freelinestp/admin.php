<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FBI WARNING</title>
	<meta name="description" content="FREELINE STP TEAM KTX-ĐHQG, là một sân chơi cho sinh viên, hoạt động hằng ngày liên tục vào ban đêm. Đó là một sân chơi chào đón tất cả sinh viên." />
	<meta name="keywords" content="freeline stp,FREELINE STP TEAM KTX-ĐHQG,FREELINE STP TEAM KTX-ĐHQG (SLIDE TỰ DO PHONG CÁCH)" />
	<meta http-equiv="content-language" content="vi" />
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
	<!-- <link rel="stylesheet" href="css/myweb.css"> -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
		<div class="container">
			<header class="header">
				<nav class="navbar navbar-inverse" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">FREELINE STP TEAM KTX-ĐHQG</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">FREELINE STP</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
								<li ><a target="_blank" href="https://www.facebook.com/groups/Freeline.STP/members/">Số Thành viên</a></li>
							</ul>
							<!-- <form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-zoom-in"></span></button>
							</form> -->
							<ul class="nav navbar-nav navbar-right">
								<li><a target="_blank" href="https://www.facebook.com/groups/Freeline.STP/">Link Group</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hỗ trợ thêm <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="./doimatkhau.php">Đổi mật khẩu</a></li>
										<li><a href="#">Mua bán freeline liên hệ: 0911 799 130</a></li>
										<li><a href="#">Muốn làm tân sư tổ :]]</a></li>
										<li class="active"><a  target="_blank" href="https://www.facebook.com/Ti.284">Chia sẽ khoảng khắc ở đây</a></li>
									</ul>
								</li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
			</header>
			<div class="banner"  >
				<div class="form-group" >
					<form action="dangbai.php" method="POST" >

							<label for="exampleInputFile">Nội dung ảnh 1</label>
							
							<input name="tieude1" type="text" class="form-control" id="exampleName" placeholder="Tiêu đề">
							<textarea name="noidung1" class="form-control" rows="3" id="exampleText" placeholder="Nội dung"></textarea>
							<hr>
							<!-- <p class="help-block">Nên sử dụng những bức ảnh có kích thước lớn</p> -->

							<label for="exampleInputFile">Nội dung ảnh 2</label>
							
							<input name="tieude2" type="text" class="form-control" id="exampleName" placeholder="Tiêu đề">
							<textarea name="noidung2" class="form-control" rows="3" id="exampleText" placeholder="Nội dung"></textarea>
							<hr>
							<!-- <p class="help-block">Nên sử dụng những bức ảnh có kích thước lớn</p> -->

							<label for="exampleInputFile">Nội dung ảnh 3</label>
							
							<input name="tieude3" type="text" class="form-control" id="exampleName" placeholder="Tiêu đề">
							<textarea name="noidung3" class="form-control" rows="3" id="exampleText" placeholder="Nội dung"></textarea>
							<hr>
							<!-- <p class="help-block">Nên sử dụng những bức ảnh có kích thước lớn</p> -->
							
							<button name="submit" type="submit" class="btn btn-default">Cập nhật nội dung slide</button>
					</form>
						</div>
			</div>
			<!-- banner -->
			<main class="main">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class=" col-md-4">
								<div class="form-group">
							<!-- <label for="exampleInputEmail1">Nhập tên</label> -->

							<form action="dangbai.php" method="POST">
							<input name="tieude4" type="text" class="form-control" id="exampleName" placeholder="Tiêu đề">
							<textarea name="noidung4" class="form-control" rows="3" id="exampleText" placeholder="Nội dung"></textarea>
							<button name="submit1" type="submit" class="btn btn-default">Cập nhật bài đăng 1</button>
							</form>

						</div>

									</div>
									<div class=" col-md-4">
										<div class="form-group">
							<!-- <label for="exampleInputEmail1">Nhập tên</label> -->
							<form action="dangbai.php" method="POST">
							<input name="tieude5" type="text" class="form-control" id="exampleName" placeholder="Tiêu đề">
							<textarea name="noidung5" class="form-control" rows="3" id="exampleText" placeholder="Nội dung"></textarea>
							<button name="submit2" type="submit" class="btn btn-default">Cập nhật bài đăng 2</button>
							</form>

						</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-4">
								<!-- <h2>Vitadfgdfge, nam!</h2>
								<p>Madfgdfggni</p>
								<a href="">more</a> -->

							</div>
							<div class="col-md-12">
								<div class="row">
									  
									  <div class="col-md-12">
									  	<form action="link.php" method="POST">
									    <div class="input-group">
									    	
									      <input name="link" type="text" class="form-control" placeholder="Nhúng video Youtube">
									      <span class="input-group-btn">
									        <button name="sublink" class="btn btn-default" type="submit
									        ">Cập nhật</button>
									      </span>
									      
									    </div><!-- /input-group -->
									    </form>
									  </div><!-- /.col-lg-6 -->
									</div><!-- /.row -->
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="list-group">
							<a href="#" class="list-group-item active">LỜI GIỚI THIỆU</a>
							<a href="#" class="list-group-item ">

								Sự ra đời của CLB FREELINE STP "SLIDE TỰ DO PHONG CÁCH” xuất phát từ mong muốn của một nhóm các Sinh Viên đến từ các trường Đại học thuộc ĐHQG TP Hồ Chí Minh hiện đang sinh sống tại Kí Túc Xá Khu A – ĐHQG TP.HCM nhằm tạo ra một sân chơi bổ ích, lành mạnh và rèn luyện thể chất. Ngoài ra đây cũng là nơi giúp các bạn xã stress sau những buổi học tập căng thẳng ở trường. Phát triển lòng đam mê, phát triển tiềm năng cũng như lòng nhiệt huyết của tuổi trẻ đối với bộ môn mới lạ này.

								CLB FREELINE STP được hình thành dựa trên tinh thần tình nguyện và hiểu rõ sự đam mê và mong muốn hòa mình với mọi người.

								Mục tiêu chung của CLB FREELINE STP là cùng nhau xây dựng - phát triển đội nhóm ngày càng mạnh mẽ với những hoạt động mới mẻ và trở thành sân chơi chung, nơi mà mọi người có thể Giao lưu – Trao đổi học tập – Kinh nghiệm cuộc sống. Từ đó, những vách thành trì của cuộc sống sẽ được xóa bỏ, không còn khoảng cách giữa người với người, không phân biệt chủng tộc -  không giai cấp và mọi người cùng nắm tay nhau hướng về phía trước, ở nơi mà chỉ còn sự đam mệ rực cháy.

								Câu Slogan của CLB “FREELINE  –  THÁCH THỨC BẢN THÂN - BỨC PHÁ GIỚI HẠN”
							</br>
							Leader
							<strong>Trần Thanh Hoàng</strong></a>

						</div>
					</div>
				</div>
			
			<div class="row">
				<div class="form-group col-xs-12 col-sm-6 col-md-2">
					<form action="file_upload_mul.php" method="POST" enctype="multipart/form-data">
						<label for="exampleInputFile">Thêm hình ảnh </label>

							<input type="file" id="exampleInputFile" multiple="" accept=".jpg" name="fileUpload[]">
							<label style="color: red">VD:01.jpg/2.jpg</label>
							<br><button type="submit" name="submit" class="btn btn-default">Cập nhật hình ảnh</button>

					</form>
							
						</div>
				

				
			</div>
			<!-- <div class="row"> -->
				<div class="col-md-12 bg1" ><h4>Biểu diễn FREELINE</h4></div>
			<!-- </div> -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6">
					<form action="link.php" method="POST">
					<div class="input-group">

									      <input name="link1" type="text" class="form-control" placeholder="Nhúng video 1 Youtube">
									      <span class="input-group-btn">
									        <button name="sublink1" class="btn btn-default" type="submit">Cập nhật</button>
									      </span>
									    </div><!-- /input-group -->
					</form>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6">
					<form action="link.php" method="POST">
					<div class="input-group">
									      <input name="link2" type="text" class="form-control" placeholder="Nhúng video 2 Youtube">
									      <span class="input-group-btn">
									        <button name="sublink2" class="btn btn-default" type="submit">Cập nhật</button>
									      </span>
									    </div><!-- /input-group -->
									</form>
				</div>
			<!-- <div class="col-xs-12 col-sm-6 col-md-3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cTOk3b01mcc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ryYmUJBE-dg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div> -->
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<form action="link.php" method="POST">
				<div class="input-group">
									      <input name="link3" type="text" class="form-control" placeholder="Nhúng video 3 Youtube">
									      <span class="input-group-btn">
									        <button name="sublink3" class="btn btn-default" type="submit">Cập nhật</button>
									      </span>
									    </div><!-- /input-group -->
									</form>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<form action="link.php" method="POST">
				<div class="input-group">
									      <input name="link4" type="text" class="form-control" placeholder="Nhúng video 4 Youtube">
									      <span class="input-group-btn">
									        <button name="sublink4" class="btn btn-default" type="submit">Cập nhật</button>
									      </span>
									    </div><!-- /input-group -->
									</form>
			</div>
			<!-- <div class="col-xs-12 col-sm-6 col-md-3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/cTOk3b01mcc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ryYmUJBE-dg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div> -->
		</div>
		</main>
		
		<footer class="bg1">
			<div class="row">

				<div class="col-xs-6 col-sm-6 col-md-6"><h4><u>LIÊN HỆ ADMIN</u></h4>
					<p><a target="_blank"  href="https://www.facebook.com/kgo.hoangtran">Kgo Hoàng Trần</a><br>Sư tổ của FREELINE STP TEAM KTX-ĐHQG (SLIDE TỰ DO PHONG CÁCH) từ 19 Tháng 10 2015</p>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6"><h4><u>THỜI GIAN HOẠT ĐỘNG</u></h4>
					<p>Địa điểm mỗi tối khu A mở rộng và khu B</p>
				</div>

			</div>
		</footer>
		
	</div>
	

	<!-- jQuery -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js" ></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="Hello World"></script>
</body>
</html>