<?php 
session_start();
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Here</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
	<div class="register-box"> 
		<div class="card">
			<div class="card-body register-card-body">
				<div id = "frm">  
					<?php 
					if(isset($_SESSION['message'])){
					?>
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>Hey!</strong> <?php echo $_SESSION['message']; ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button> 
					  </div>
					<?php 
					unset($_SESSION['message']);
					}
					?>
					<h2 class="d-flex justify-content-center"><b>ROOT</b></h2>  
					<form action = "back_file.php" method = "POST">   
							<label> Email: </label>    
						<div class="input-group mb-3">
						   <input type = "email"  class="form-control" name="email" placeholder="example1@gmail.com" required/>  
								<div class="input-group-append">
									<div class="input-group-text">
									 <span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
							<label> Password: </label>  
						<div class="input-group mb-3">
							<input type = "password" class="form-control" name="password" placeholder="*****" required/>  
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
							
						</div>
						<p class="mb-1">
							<b><a href="forget_pass.php">Forgot Password?</a></b>
						</p>
						<div class="mb-1">
							<input type = "submit" class="btn btn-primary form-control" name="login" value = "Login" />  
						</div> 
						<p class="mb-2">
						   <b>Not Yet a Member?<a href="register.php" class="text-center">Signup Now</a></b>
						</p>		  
					</form>  
				</div>  
            </div>
	    </div>	
 </div>    
 
 <!-- jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>
</body>     
</html>  