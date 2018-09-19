<?php
	include_once "dbh.inc.php";
	if($conn){
		echo "yeah you are right";
	}

	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$sql = "select * from student_login where EmailId='$email' and Password='$password';";
	$result = mysqli_query($conn,$sql);
	$resultCheck =  mysqli_num_rows($result);
	if($resultCheck != 0 ){ 
		while($row = mysqli_fetch_assoc($result)){
			echo $row;
		}
	}else{
		echo "Incorrect Password";
	}
	//header("Location: ../LoginPage/Login.php?singup=success");
?>