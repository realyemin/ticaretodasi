<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Yönetim Paneli</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.6 -->
		<link rel="stylesheet" href="kaynak/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="kaynak/dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="kaynak/plugins/iCheck/square/blue.css">
		<style type="text/css">
			body,td,th {
			font-family: "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
			}
			body {
			background-image: url();
			}
			h1,h2,h3,h4,h5,h6 {
			font-family: "Source Sans Pro", sans-serif;
			}
		</style>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo"> 
				<p><img src="../img/Logo_admin.png" width="353" height="131" alt=""/><strong></strong></p>
			</div>
			<!-- /.login-logo -->
			<div class="login-box-body">Giriş İçin Bilgileri Doldurunuz<input type="hidden" name="a" value="">
				
				<form action="kontrol.php?a=<?php if(isset($_GET["a"])) echo $_GET["a"] ?>" method="post">
					<div class="form-group has-feedback">
						<input type="email" class="form-control"  name="mail" placeholder="Email" value="<?php if(isset($_COOKIE['tso'])){ echo $_COOKIE['tso'];}?> ">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" name="sifre" placeholder="Password">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
					<div class="row">
						<div class="col-xs-8">
							<div class="checkbox icheck">
								<label>
									<input type="checkbox" name="beniHatirla" <?php if(isset($_COOKIE['tso'])){ echo "checked";}?>  > Beni Hatırla
								</label>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Giriş </button>
						</div>
						<!-- /.col -->
					</div>
					<div class="row">
						<div class="col-xs-8">
							<?php if(isset($_GET['hata']))
								{
									switch($_GET['hata'])
									{
										case 1:
										echo "<div class='aler alert-danger'><li>Bigilerinizi kontrol ediniz.</li></div>";
										break;
										case 2:
										echo "<div class='aler alert-danger'><li>Lütfen alanları doldurunuz.</li></div>";
										break;
									}
									
								} 
							?>
						</div>
					</div>
				</form>
				
				
			<!-- /.social-auth-links --></div>
			<!-- /.login-box-body -->
			</div>
			<!-- /.login-box -->
			
			<!-- jQuery 2.2.3 -->
			<script src="kaynak/plugins/jQuery/jquery-2.2.3.min.js"></script>
			<!-- Bootstrap 3.3.6 -->
			<script src="kaynak/bootstrap/js/bootstrap.min.js"></script>
			<!-- iCheck -->
							<script src="kaynak/plugins/iCheck/icheck.min.js"></script>
							<script>
								$(function () {
								$('input').iCheck({
									checkboxClass: 'icheckbox_square-blue',
									radioClass: 'iradio_square-blue',
									increaseArea: '20%' // optional
								});
							});
							</script>
	</body>
</html>
