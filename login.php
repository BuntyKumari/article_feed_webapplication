<?php
include('connection.php');
include('header.php');
error_reporting(0);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>

<body>


<section id="login">
    <div class="container">
    	<div class="row" >
    	    <div class="col-md-12">
        	    <div class="form-wrap" >
                <h1 class="text-white">Login with Your Email/Phone</h1>
                
                    <form role="form" action="" method="post" id="login-form" >
                        <div class="form-group">
                            <label for="email" >Email</label>
                            <input type="text" name="email"  class="form-control" placeholder="Email or Phone" required>
                        </div>
                        <div class="form-group">
                            <label for="key" >Password</label>
                            <input type="password" name="key"  class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                        <input type="submit" id="btn-login" name="submit" class="btn btn-danger btn-lg btn-block" value="Login">
                        <?php
						
							if(isset($_POST['submit']))
							{							
							     $username	= $_POST['email'];
								 $password	= $_POST['key'];
								
								$sql = "SELECT * from register where email='$username' AND password='$password' OR phone='$username' AND password='$password' ";
								$data = mysqli_query($con,$sql);
								echo $pas = mysqli_num_rows($data);
								if($pas==1)
								{
									session_start();
									$_SESSION['uname'] = $username;
									echo $_SESSION['uname'];
									
									echo "<div class='alert alert-primary alert-dismissible text-center'>Login successful
									<button type='button' class='close' data-dismiss='alert'>&times; </button>
									</div>";
									header('location: user-dashboard.php');
								}
								else
								{
									echo "<div class='alert alert-danger alert-dismissible text-center'>Invalid Email id or Password
									<button type='button' class='close' data-dismiss='alert'>&times; </button>
									</div>";	
								}
								
							}
                           
						?>
                        </div>
                           <hr>
                        <div class="col-md-10">
                       <p class="text-center text-white"> Don't have an Account? <a href="registration.php">SignUp Here</a></p>
                        </div>
                        
                    </form>
                    
                 
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

</div>  <!-- header ends -->


</body>
</html>

<?php
include('footer.php');
?>