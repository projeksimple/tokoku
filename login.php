<?php
session_start();
// koneksi ke database 
$koneksi = new mysqli("localhost","root","","tokoku")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoKu-Sign In</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link rel="stylesheet" href="./assets/css/costum.css.css">
  <link rel="stylesheet" href="./assets/css/font-awesome.css">
  <link rel="stylesheet" href="https://font.goggle.com/css?familyl=Open+Sans">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="./assets/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./assets/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

	<div class="col-xl-10 col-lg-12 col-md-9">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class ="col-lg-12">
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
							</div>
							<form class="user">
								<div class="form-group">
									<input type="email" class="form-control form-control-user"
										id="exampleInputEmail" aria-describedby="emailHelp"
										placeholder="Enter username...">
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-user"
										id="exampleInputPassword" placeholder="Password">
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox small">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember
											Me</label>
									</div>
								</div>
								<a href="index.html" class="btn btn-primary btn-user btn-block">
									Login
								</a>
								<hr>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="forgot-password.html">Forgot Password?</a>
							</div>
							<div class="text-center">
								<a class="small" href="register.html">Create an Account!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>

</div>
	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="assets/js/custom.js"></script>


    <!-- Bootstrap core JavaScript-->
    <script src="./assets/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/sbadmin/js/sb-admin-2.min.js"></script>
</body>
</html>