<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/tai-khoan/css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<!-- CODE XỬ LÝ PHP -->
	<?php
		require_once ('../admin/dao/khach-hang.php');

		extract($_REQUEST);
		if(array_key_exists('btn_register',$_REQUEST)){
			khach_hang_insert($ma_kh,$ho_ten,$mat_khau,$email,$dia_chi);

			header("location: dang-nhap.php");

			echo '<script language="javascript">';
            echo 'alert("Mời bạn đăng nhập để mua hàng !")';
			echo '</script>';
			
			unset($ma_kh,$ho_ten,$mat_khau,$email,$dia_chi);


		}
	?>

	<!-- -->
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('/css/tai-khoan/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method = "post">
					<span class="login100-form-logo">
					<a href="../../trang-chinh/index.php"><img src="https://scontent.fsgn8-2.fna.fbcdn.net/v/t1.6435-9/181150315_102201648705132_5894264111956944146_n.png?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=lOSGnCDWgq8AX9bWVAh&_nc_ht=scontent.fsgn8-2.fna&oh=a37059c639c6fcb0976b811f3a23a5a7&oe=60BD403A" width = "80px" alt=""></a>
					</span>

					
					<span class="login100-form-title p-b-34 p-t-27">
						ĐĂNG KÝ
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="ma_kh" placeholder="Tên đăng nhập" >
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="ho_ten" placeholder="Họ và tên">
						<span class="focus-input100" class='fas' data-placeholder="&#xf18e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="mat_khau" placeholder="Mật khẩu">
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="dia_chi" placeholder="Địa chỉ">
						<span class="focus-input100" data-placeholder="&#xf18e;"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type = "submit" name = "btn_register">
							XÁC NHẬN
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="dang-nhap.php">
							Đăng nhập?&nbsp;
						</a>hay
						<a class="txt1" href="quen-mk.php">
						&nbsp;Quên mật khẩu?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/bootstrap/js/popper.js"></script>
	<script src="/css/tai-khoan/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/daterangepicker/moment.min.js"></script>
	<script src="/css/tai-khoan/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/css/tai-khoan/js/main.js"></script>

</body>
</html>