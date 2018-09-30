<?php
include('connection.php');
include('header1.php');
error_reporting(0);
?>

<!Doctype html>
<html>
<head>
	<title>Registration form</title><!-- SEO title -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<h1 class="text-white text-center"> Registration Form </h1>
				<form method="post" action=""> 
					<label for="fname">First Name </label>
					<div class="form-group">
						<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" >
					</div>

					<label for="lname">Last name </label>
					<div class="form-group">
						<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" >
					</div>

					<label for="pnumber">Phone Number</label>
					<div class="form-group">
						<input type="phone" maxlength="10" class="form-control" name="pnumber" id="pnumber" placeholder="Mobile Number" >
					</div> 

					<label for="email">Email </label>
					<div class="form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email" >
					</div>    

					<label for="dob">Date of Birth </label>
					<div class="form-group">
						<input type="date" class="form-control" name="dob" id="dob" >
					</div>  

					<label for="password">Password </label>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" >
					</div>

					<label for="cpassword">Confirm Password </label>
					<div class="form-group">
						<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
					</div>

					<label for="cpassword">Confirm Password </label>
					<div class="form-group">
						<select name= class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
					</div>


					<div class="form-group">
						<input type="submit" name="submit" value="Register" class="btn btn-custom btn-lg btn-block">
					</div>	
					<?php
					if(isset($_POST['submit']))
					{
						$fname	=	$_POST['fname'];
						$lname	=	$_POST['lname'];
						$phone  =   $_POST['pnumber'];
						$email  =   $_POST['email'];
						$dob	=	$_POST['dob'];
						$password =	$_POST['password'];
						$cpassword =	$_POST['cpassword'];

						if($fname!="" && $lname!="" && $phone!="" && $email!="" && $dob!="" && $password!="" && $cpassword!="")
						{
							if($password==$cpassword)
							{
							
							$sql = "INSERT INTO register values ('','$fname','$lname','$phone','$email','$dob','$password')";
							$result = mysqli_query($con, $sql);

							if($result)
								{

									echo "<div class='alert alert-success alert-dismissible text-center'>Registration completed
									<button type='button' class='close' data-dismiss='alert'>&times; </button>
									
									</div>";
								}	
								else
								{
									echo "<div class='alert alert-danger alert-dismissible text-center'>Registration failed!
									<button type='button' class='close' data-dismiss='alert'>&times; </button>
									
									</div>";
								}
							}
							else{
									echo "<div class='alert alert-danger alert-dismissible text-center'>Password not confirmed
									<button type='button' class='close' data-dismiss='alert'>&times; </button>
									
									</div>";
								}
						}
					}
					
					?>
                       <hr>
                        <div class="col-md-10">
                       <p class="text-center text-white"> Already have an Account? <a href="login.php">Login Here</a></p>
                        </div>
                    
                    
                     </div>
                        
                        
				</form>
			<div>
		</div>
	</section>  
	</div> 
	
	<?php
include('footer.php');
?>

</body>
</html>