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
					<a href="user-profile.php">User Profile </a> </li>
				
				<li class="breadcrumb-item"> 	
					<a class="active">Change Password </a>
				</li>
			</ul>
		</div> <!-- // end breadcrumb -->


		<!-- change password -->

		<div class="container">
			<form action="" method="post">
			<div class="col-md-5 m-auto">
				<label>Old Password</label>
				<div class="form-group">
					<input type="password" placeholder="Enter your old password" name="oldpassword" class="form-control">
				</div>
				<div class="form-group">
					<label>New Passowrd</label>
					<input type="password" class="form-control" name="newpassword" placeholder="Enter new password">
				</div>

				<div class="form-group">
					<label>Confirm New Passowrd</label>
					<input type="password" class="form-control" name="cpassword" placeholder="Re-enter new password">

				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-success btn-block" name="submit" value="Change Password">
				</div>

				<?php
				if(isset($_POST['submit']))
				{

					 $oldpassword = $_POST['oldpassword'];
					 $newpassword = $_POST['newpassword'];
					 $cpassword = $_POST['cpassword'];

					$sql = "select * from register where password = '$oldpassword' AND email = '$user' ";
					$data = mysqli_query($con, $sql);
					 $total = mysqli_num_rows($data);
					
					if($total==1)
					{
						if($newpassword==$cpassword)
						{
							$newQuery = "update register set password = '$newpassword' WHERE email = '$user' ";
							$newdata = mysqli_query($con, $newQuery);
							if($newdata)
							{
								echo "<div class='alert alert-success alert-dismissible'>
								Password changed successfully.
								<button type='button' class='close'>&times; </button>
								  </div>";
							}
							else
							{
								echo "<div class='alert alert-danger alert-dismissible'>
								Failed to change the password.
								<button type='button' class='close'>&times; </button>
								  </div>";	
							}
						}
						else
						{
							echo "<div class='alert alert-danger alert-dismissible'>
								Password not matched. Please re-enter the password.
								<button type='button' class='close'>&times; </button>
								  </div>";	
						}
						
					}
					else
					{
						 echo "<div class='alert alert-danger alert-dismissible'>
							Sorry old password not confirmed. Try again.
							<button type='button' class='close'>&times; </button>
							  </div>";
					}

				}
				


				?>

			</div>
		</form>
		</div>


</div>

<?php
	include('footer.php');
?>
</body>

</html>