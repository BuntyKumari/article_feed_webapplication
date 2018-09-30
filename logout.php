<?php
session_start();
session_unset();

if($_SESSION['uname']==false)
{
	header('location: index.php');
}
include('user-header.php')

?>