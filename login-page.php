<?php 
session_start(); // memulai session untuk membuat / mendapatkan nilai session

/** 
 * menyisipkan file config.php untuk mendapatkan
 * variable $url
 */
require 'config.php';

?>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/custome.css">
	<!-- Script jQuery CDN google library -->
	

	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body">
	<!-- Form Login -->
	<div class="col-md-offset-4 login col-md-4">

		<h2 class="text-center">Login</h2>
		<div class="boxed">
			<?php
			if( isset($_SESSION['error_login']) )
			{
				echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error_login'].'</div>';
				
				// menghapus session error 
				unset($_SESSION['error_login']);
			}
			?>
			<form action="<?php echo $url;?>/?page=check-login" role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Kelas" name="kelas" type="text" autofocus>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <p><input type="submit" name="submit" value="Login" class="btn btn-lg btn-success btn-block"></input></p>
                                </fieldset>
			</form>
		</div>	
		
	</div>
	<!-- End Form Login -->
	<!-- Fixed bar -->


	<nav class="fixed-bar">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<h1 class="title-site">
						<a>AbsenOnline.com</a>
						
				</div>
			
				<div class="col-md-4"></div>
				<div class="col-md-4 text-right">
				  <a href="index.php" class="btn btn-sm btn-danger"><i class="fa fa-user"></i> Beranda</a>
				  <a href="contact.php" class="btn btn-sm btn-danger"><i class="fa fa-user"></i> Contact</a>					
	              <a href="about.php" class="btn btn-sm btn-danger"><i class="fa fa-user"></i> About</a>
	              <a href="login-page.php" class="btn btn-sm btn-danger"><i class="fa fa-sign-out"></i>  Login</a>
	      	
				
			
				</div>
			</div>
		</div>
	</nav><br><br>
	<!-- End Fixed bar -->

</body>
</html><footer class="footer">
	<div class="text-center">
		&copy; 2017 <a>Toniyansyah</a>
	</div>
</footer>
</body>
</html>