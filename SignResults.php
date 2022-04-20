<?php
	require 'config.php';
	
	$a=$_POST["fname"];
	$b=$_POST["phone"];
	$c=$_POST["address"];
	$d=$_POST["email"];
	$e=$_POST["pswn"];
	
	$sql="INSERT INTO customer_details(FullName,Contact,Email,Address,Password,CustomerID)VALUES('$a','$b','$d','$c','$e','')";
	
	if($conn->query($sql)){
		echo"Inserted successfully";
		header("Location:Log in H.html");
	}
	else{
		echo "Error:".$conn->error;
	}
	$conn->close();
?>