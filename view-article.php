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

	<?php
	$query = "select * from  article where id='$article_id' ";
	$data = mysqli_query($con, $query);
	$result = mysqli_fetch_assoc($data);
	$tag = $result['tag'];
	$img = $result['img'];
	?>
	<div class="container-fluid" style="padding: 100px 0px;">

		<?php echo $msg; ?>

		<div class="container-fluid" style="padding: 0 102px;">
			<ul class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="user-dashboard.php">Dashboard </a>
				</li>
				<li class="breadcrumb-item">
					<a href="">Article Details</a>
				</li>
				
				<li class="breadcrumb-item"> 	
					<a class="active">View Article </a>
				</li>
			</ul>
		</div> <!-- // end breadcrumb -->

		<form method="post" action="" enctype="multipart/form-data">
		<div class="container myArticleArea">
			<div class="row">
				<div class="col-md-9">
					
						<div class="form-group">
						<label>Article Name	</label>
						<input type="text" name="articleName" required="required" placeholder="Article Name" disabled="true" value="<?php echo $result['name'];?>" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" rows="15" required="required" placeholder="Article Description" disabled="true" class="form-control"><?php echo $result['description'];?>
						</textarea> 
					</div>
				</div>  <!-- // end column -->

				<!-- second column starts -->
				<div class="col-md-3">
					<div class="form-group">
						<label>Category</label>
						<select name="category" disabled="true" class="form-control">
							<option><?php echo $result['category'];?></option>

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
						<input disabled="true" value="<?php echo $tag;?>" name="tag" placeholder="Add a Tag" type='text' class="form-control">
					</div>

					<div class="form-group">
						<img src="<?php echo $img;?>" class="img-thumbnail" style="width: 242px; height: 140px;">
					</div>

					<div class="form-group">
						<a href = "show-article.php" class="btn btn-danger btn-block"><i class="fa fa-fast-backward"></i> Back to Article </a>
					</div>

					
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