<?php
$con = mysqli_connect( 'localhost','root', '', 'article');
if(!$con)
{
	die("Not connected".mysqli_connect_error());
}
?>