<?php
session_start();
error_reporting(0);
include('connection.php');

$session = $_SESSION['uname'];
$query = "select * from register where email = '$session' or phone = '$session' ";
$data = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($data);
$name = $row['firstname'] ." ". $row['lastname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Article | A platform to share your own article</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	 
	<link rel="stylesheet" type="text/css" href="css/userstyle.css">
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
	
</head>
<body>
	<div class="bgimg" style="background-image: none;">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="container">
				<a href="index.php" class="navbar-brand text-warning font-weight-bold">MY ARTICLE</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse " id="collapsenavbar">
					<ul class="navbar-nav text-left ml-auto">
						
						<li class="nav-item"> 
							<a href="user-dashboard.php" class="nav-link navmenu">Dashboard </a>
						</li>

						 <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="myDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Article Details
					        </a>
					        <div class="dropdown-menu bg-dark" aria-labelledby="myDropDown">
					          <a class="dropdown-item text-white bg-dark" href="add-new-article.php">Add New Article</a>
					          <a class="dropdown-item text-white bg-dark" href="show-article.php">List of Articles</a>
					          
					        </div>
					      </li>						

						<li class="nav-item dropdown"> 
							<a href="#" class="nav-link dropdown-toggle" id="dropProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings </a>

							<div class="dropdown-menu bg-dark" aria-labeledby="dropProfile">
								<a href="user-profile.php" class="dropdown-item text-white bg-dark">Profile Details</a>
								<a href="change-password.php" class="dropdown-item text-white bg-dark">Change Password </a>
							</div>
						</li>

						
					</ul>

					<ul class="navbar-nav text-left ml-auto">
						
						<li class="nav-item"> 
							<a href="" class="nav-link navmenu text-white"><?php echo $session; ?> </a>
						</li>
						<li class="nav-item"> 
							<a href="logout.php" class="nav-link navmenu"><i class="fa fa-sign-out"></i> Logout </a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>  <!-- // navbar ends -->

		
	
