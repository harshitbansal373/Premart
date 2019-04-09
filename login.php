<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<!-- Page Content -->
<section id="login">
	<div class="container">
        <div class="row  justify-content-center align-items-center">
            <div class="col-sm-4 col-sm-offset-4 boxview mt-4 px-5 py-2" style="width:370px;">
                <div class="form-wrap">
					<h3 class="text-center mt-3 mb-3"><img src="icon/lock.png" alt=""></h3>
                	    <form role="form" action="includes/login.php" method="post" id="login-form" autocomplete="off">
                			<div class="input-group mb-3">
								<div class="input-group-prepend">
     								<span class="input-group-text"><i class="far fa-user"></i></span>
								</div>
                	            <label for="username" class="sr-only">Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username">
							</div>
                	        <div class="input-group mb-3">
								<div class="input-group-prepend">
     								<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
                	            <label for="password" class="sr-only">password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                	        </div>
                	        <input type="submit" name="login" id="btn-login" class="btn btn-secondary btn-lg btn-block" value="Login"><br>
							<div class="form-group text-center">
      						<a href="forgot.php?forgot=<?php echo uniqid(true); ?>"> Forgot Password?</a>
      						</div>
                	    </form>
                </div>
    	    </div> <!-- /.col-sm-4 -->
    	</div> <!-- /.row -->		
	</div> <!-- /.container -->
</section>

<?php include "includes/footer.php";?>
	