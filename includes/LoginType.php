<?php
	$loginType = $_GET['btn'];
	echo $loginType;

	if($loginType === "Teacher"){
		header("Location: ../LoginPage/Login.php");
	}else{
		header("Location: ../LoginPage/Login.php");
	}
?>