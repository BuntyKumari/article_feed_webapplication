<?php
include('connection.php');
error_reporting(0);
include('user-header.php');
$user = $_SESSION['uname'];
if($_SESSION['uname']==false)
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile Details | My Article </title>
</head>
<body>
	<div class="container-fluid" style="padding: 100px 0px;">
		<div class="container-fluid" style="padding: 0 102px;">
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="user-dashboard.php">Dashboard </a>
				</li>
				
				<li class="breadcrumb-item"> 	
					<a class="active">User Profile Details </a>
				</li>
			</ul>
		</div> <!-- // end breadcrumb -->


<?php
	$myquery = "select * from register where email='$user'";
	$mydata = mysqli_query($con, $myquery);
	$myrow = mysqli_fetch_assoc($mydata);
?>

		<div class="container">
			<div class="col-md-6 m-auto">
			<form class="form-horizontal" action="" method="post">
				<label> First Name </label>
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" disabled="true" value="<?php echo $myrow['firstname']; ?>">
					</div>
					<label> Last Name </label>
					<div class="form-group">
						<input type="text" class="form-control" name="lastname" disabled="true" value="<?php echo $myrow['lastname']; ?>">
					</div>
					<label> Mobile No. </label>
					<div class="form-group">
						<input type="phone" class="form-control" name="firstname" disabled="true" value="<?php echo $myrow['phone']; ?>">
					</div>
					<label> E-mail </label>
					<div class="form-group">
						<input type="text" class="form-control" name="email" disabled="true" value="<?php echo $myrow['email']; ?>">
					</div>

					<label> Date of Birth </label>
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" disabled="true" value="<?php echo $myrow['dob']; ?>">
					</div>

					<label> Article Preference </label>
					<div class="form-group">
						<input type="text" class="form-control" name="firstname" disabled="true" value="<?php echo $myrow['category']; ?>">
					</div>
				</form>

			</div>

		</div>
	</div>
	

<?php
	include('footer.php');
?>
</body>

</html>



</body>
</html>
