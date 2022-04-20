<?php
	require 'config.php';
	
	$d=$_POST["email"];
	$e=$_POST["psw"];
	
	$sql="SELECT FullName FROM customer_details WHERE Email='$d' AND Password='$e'";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		$a=$row["FullName"];
		header("Location:Home C.php");
	}
	else{
		echo "<br>Invalid Email or Password Entered";
	}
	$conn->close();
?>