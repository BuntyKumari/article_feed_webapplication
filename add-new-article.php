<?php
include('connection.php');
error_reporting(0);
include('user-header.php');
if($_SESSION['uname']==false)
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Article | Add New Article</title>
	<link rel="stylesheet" type="text/css" href="css/userstyle.css">


	<!-- tag -->
	<link rel="stylesheet" type="text/css" href="tags/src/jquery.tagsinput.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="tags/src/jquery.tagsinput.js"></script>
	<!-- To test using the original jQuery.autocomplete, uncomment the following -->
	<!--
	<script type='text/javascript' src='http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://xoxco.com/x/tagsinput/jquery-autocomplete/jquery.autocomplete.css" />
	-->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js'></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/start/jquery-ui.css" />



	<script type="text/javascript">

		function onAddTag(tag) {
			alert("Added a tag: " + tag);
		}
		function onRemoveTag(tag) {
			alert("Removed a tag: " + tag);
		}

		function onChangeTag(input,tag) {
			alert("Changed a tag: " + tag);
		}

		$(function() {

			$('#tags_1').tagsInput({width:'auto'});
			$('#tags_2').tagsInput({
				width: 'auto',
				onChange: function(elem, elem_tags)
				{
					var languages = ['php','ruby','javascript'];
					$('.tag', elem_tags).each(function()
					{
						if($(this).text().search(new RegExp('\\b(' + languages.join('|') + ')\\b')) >= 0)
							$(this).css('background-color', 'yellow');
					});
				}
			});
			$('#tags_3').tagsInput({
				width: 'auto',

				//autocomplete_url:'test/fake_plaintext_endpoint.html' //jquery.autocomplete (not jquery ui)
				autocomplete_url:'test/fake_json_endpoint.html' // jquery ui autocomplete requires a json endpoint
			});
		});

	</script>

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
					<a class="active">Add New Article </a>
				</li>
			</ul>
		</div> <!-- // end breadcrumb -->

		<form method="post" action="" enctype="multipart/form-data">
		<div class="container myArticleArea">
			<div class="row">
				<div class="col-md-9">
					
						<div class="form-group">
						<label>Article Name	</label>
						<input type="text" name="articleName" required="required" placeholder="Article Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" rows="15" required="required" placeholder="Article Description" class="form-control"></textarea> 
					</div>
				</div>  <!-- // end column -->

				<!-- second column starts -->
				<div class="col-md-3">
					<div class="form-group">
						<label>Category</label>
						<select name="category" class="form-control">
							<option>Select Category</option>
							<?php
							$query = "select * from category";
							$result = mysqli_query($con, $query);
							while($row = mysqli_fetch_assoc($result))
							{
								?>
								<option><?php echo $row['name']; ?></option>
								<?php
							}
							?>							
						</select>
					</div>

					<div class="form-group">
						<label>Tags</label>
						<input id='tags_3' name="tag" placeholder="Add a Tag" type='text' class="tags form-control"></p>
					</div>

					<div class="form-group">
						<label>Featured Image</label>
						<input type="file" name="file" class="form-control">
					</div>	

					<div class="form-group">
						<input type="submit" class="btn btn-info btn-block" name="submit">
					</div>

					<?php
					if(isset($_POST['submit']))
					{
						$email = $_SESSION['uname'];
						 $articleName = $_POST['articleName'];
						 $desc = mysqli_escape_string($con, $_POST["description"]);

						 $cat = $_POST['category'];
						 $tag = $_POST['tag'];

						$file_name = $_FILES['file']['name'];
						$file_type = $_FILES['file']['type'];
						$file_size = $_FILES['file']['size'];
						$file_tem_loc = $_FILES['file']['tmp_name'];
						$file_store = "upload/".$file_name;	
						$date = date('d-m-y');
					
								
				
					if(!empty($_FILES['file']['name']))
					{						
							move_uploaded_file($file_tem_loc,$file_store);
						//	echo $file_store ."<br/>";
							
							$sql = "INSERT INTO article values('', '$articleName', '$desc', '$cat', '$tag', '$file_store', '$email','$date')";
							$data = mysqli_query($con,$sql);
								if($data)
								{
									echo "<div class='alert alert-success alert-dismissible'>
									Article submitted
									<button type='button' class='close' data-dismiss='alert'>&times;</button> 
									</div>";	
								}
								else
								{
									echo "<div class='alert alert-danger alert-dismissible'>
									Failed to submit
									<button type='button' class='close' data-dismiss='alert'>&times;</button> 
									</div>";
								}
					}
				}
			?>
			</div>  <!--// end column -->
		</div>
	 `</div>
	</form>
</div>

<?php
include('footer.php');
?>
</body>
</html>