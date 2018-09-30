<?php
include('connection.php');
session_start();
error_reporting(0);
include('user-header.php');

 $user = $_SESSION['uname'];
if($_SESSION['uname']==false)
{
	header('location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Article | My Article</title>
</head>
<body>

<div class="container-fluid" style="padding: 100px 0px;">
		<div class="container-fluid" style="padding: 0 102px;">
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="user-dashboard.php">Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="show-article.php">Article Details</a>
				</li>
				
				<li class="breadcrumb-item"> 	
					<a class="active">Article Lists </a>
				</li>
			</ul>
		</div> <!-- // end breadcrumb -->


<div class="container">
	<div class="col-md-6">
		<a href="add-new-article.php" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New Article </a> 
	</div>
	<br/>
	<table class="table">
		<thead>
			<tr>
				<th>Id </th>
				<th>Article Name </th>
				<th>Category</th>
				<th>Tagged with</th>				
				<th>Action </th>
			</tr>
		</thead>
		<tbody>
			<?php
			 $user = $_SESSION['uname'];
			$query = "select * from article where email = '$user' ";
			$data = mysqli_query($con, $query);
			while($row = mysqli_fetch_assoc($data))
			{
				?>
				<tr>
					<td><?php echo $row['id']; ?> </td>
					<td><?php echo $row['name']; ?> </td>
					<td><?php echo $row['category']; ?></td>
					<td><?php echo $row['tag']; ?></td>
					
					<td><a href="view-article.php?id=<?php echo $row['id']; ?> " class="btn btn-info"> View </a> <a href="edit-article.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> Edit</a> <a href="delete-article.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete </a></td>
					
				</tr>

				<?php
			}
			?>
			<tr>

			</tr>
		</tbody>
		
	</table>
</div>

</body>
</html>