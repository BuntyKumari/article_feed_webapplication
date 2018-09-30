<?php
error_reporting(0);
include('connection.php');
include('user-header.php');
$user = $_SESSION['uname'];
if($_SESSION['uname']==false)
{
	header('location: index.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>User Dashboard</title>
<style>
	#content{
	overflow: hidden;
	width:100%;
	display: -webkit-box;
	-webkit-line-clamp: 5;
	-webkit-box-orient: vertical;
	}

	#popularpost{
	overflow: hidden;
	width:100%;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
	}

</style>
</head>
<body>

	<div class="container-fluid" style="padding: 100px 0px;">
		<div class="container-fluid" style="padding: 0 102px;">
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="user-dashboard.php">Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a class="active">Article Details</a>
				</li>
				
			</ul>
		</div> <!-- // end breadcrumb -->

  

<div class="container-fluid" style="padding: 40px 0px;">



	<div class="container" >
		<div class="row">
			<div class="col-md-9" style="border-right: 1px solid #ccc;">
				
					<?php
						$query = "select * from article order by id desc";
						$result = mysqli_query($con, $query);
						while($row = mysqli_fetch_assoc($result))
						{
							?>
							<table class="table table-borderdless">
								<tr>

									<td><h3><?php echo $row['name']; ?> </h3> </td>
								</tr>
								<tr>
									<td>
										<img src="<?php echo $row['img'];?>" style="width: 100%; height: 320px;"></td>
									</td>
								<tr>
									<td><p id="content"><?php echo $row['description']; ?> </p><a href="show-all-article.php?id=<?php echo $row['id'];?>" class="btn btn-info">Read More</a> </td>
								</tr>

								
							</table>
							<hr>

							<div class="row">
								<div class="col-md-3">
									 Category :  <a href=""> <?php echo $row ['category'];?> </a> 
									</div>
								<div class="col-md-3">
									Tagged with: <a href=""><?php echo $row['tag']; ?></a>
								</div>

								<div class="col-md-2">
									<?php
									$useremail = $row['email'];
									$query2 = "select * from register where email = '$useremail' ";
									$mydata = mysqli_query($con, $query2);
									$myresult = mysqli_fetch_assoc($mydata);
									?>
									Author <a href=""><?php echo $myresult['firstname']; ?></a>
								</div>
								<div class="col-md-3">
									Posted on : <?php echo $row['mydate']; ?>
								</div>
							</div>
							<br/>

							<div class="row">

								<div class="col-md-2">

							<button type="button" class="btn btn-success" title="Like" onClick=" onClick()"><i class= "fa fa-thumbs-o-up"></i> <a id="clicks"> 0</a></button>
    
    						<button type="button" class="btn btn-warning" title="Dislike" onClick="ondislike();"><i class="fa fa-thumbs-o-down"></i><a id="onDislike"></a></button> 
    						</div>
    					
    					<div class="col-md-2">
    						<button type="button" class="btn btn-danger" style="height: 40px; width: 50px;" title="Block"> <i class="material-icons">&#xe14b;</i> </button>
    							
    						
 


								</div>
								

							</div> <!-- end row -->
							<br/><br/><br/>


							<?php
						}
					?>
				
			</div>  <!-- // end column -->

			<div class="col-md-3">
				<table class="table table-borderdless">
					<tr>
						<td colspan="2"><h3>Popular Posts</h3> </td>
					</tr>
					<?php 
					$myquery = "select * from article";
					$resultset = mysqli_query($con, $myquery);
					while($rowset = mysqli_fetch_assoc($resultset))
					{
						?>
						<tr>
							<td><img src="<?php echo $rowset['img']; ?>" style="width: 70px; height: 70px;"></td>
							<td>
								<p><?php echo $rowset['name']; ?> </p>
							</td>
						</tr>
						<?php
					}
					?>
					
				</table>
			</div>
		</div>  <!-- end row -->
	</div>  <!-- // end container -->
	



</div>  <!-- // end container fluid -->

</div>
<?php
include('footer.php');
?>
	



</body>
</html>

<script type="text/javascript">

    var clicks = 0;
    var onDislike =0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
    function ondislike(){
    	onDislike -= 1;
    	document.getElementById("onDislike").innerHTML = onDislike;
    };
    </script>