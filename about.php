<html>
<head>
	<title>About</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/custome.css">
	<!-- Script jQuery CDN google library -->
	

	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body"> 
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
	<footer class="footer">
	<div class="text-center">
		&copy;<a>Toniyansyah Wahyudi</a>
	</div>
</footer>
</body>
</html>
	<!-- Form Login -->
	<div class="col-md-offset-4 login col-md-4">

		<h2 class="text-center">About</h2>
		<div class="boxed">
		<a>Silahkan ditilik websiteku</a>
		
		</div>
		
		
		
		<?php
			if( isset($_SESSION['error_login']) )
			{
				echo '<div class="alert alert-danger" role="alert">'.$_SESSION['error_login'].'</div>';
				
				// menghapus session error 
				unset($_SESSION['error_login']);
			}
			?>

</body>
</html>