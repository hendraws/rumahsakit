<?php require_once "_config/config.php"; 
	  if(!isset($_SESSION['user']) ){
	  	echo "<script>window.location='".base_url('views/auth/login.php')."';</script>";
	  }else{
	  	echo "<script>window.location='".base_url('views/dashboard/index.php')."';</script>";
	  }
?>

