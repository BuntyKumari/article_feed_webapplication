<?php
include('connection.php');
session_start();
error_reporting(0);
include('user-header.php');

echo $user = $_SESSION['uname'];
if($_SESSION['uname']==false)
{
	header('location: index.php');
}
$article_id = $_GET['id'];
$query = "delete from article where id = '$article_id' ";
$mydata = mysqli_query($con, $query);
if($mydata)
{
	echo "<div class='alert alert-success text-center alert-dismissible'> Article has deleted successfully.
	<button type='button' class='close' data-dismiss='alert'>&times;</button> 
	</div>";
	header('location: show-article.php');
}
else
{
	echo "<div class='alert alert-danger alert-dismissible'>
									Failed to delete
									<button type='button' class='close' data-dismiss='alert'>&times;</button> 
									</div>";
	header('location: show-article.php');
}
?>
