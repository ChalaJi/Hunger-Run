<!DOCTYPE HTML>
<html>
<head>
<title>Order Progession</title>
<link rel="stylesheet" href="styles/style4.css"/>
<script src="js/javascript4.js"></script>
</head>
<body style="background-color:#F2C7DF;" class="font">

	<img src="images/Hunger run logo.png" class="logo"/>

<div class="header">
<div align="right">
	<?php
	require 'config.php';
	
	$sql="SELECT FullName FROM customer_details";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		$a=$row["FullName"];
		echo "<h2>$a</h2>";
	}
	?>
</div>
</div>
<div style="margin : 30px 20px;">
<ul class="menu">
			<li class="menu"><a href="Home C.php">Home</a></li>
			<li class="menu"><a href="OrderHistory G.php">Order History</a></li>
			<li class="menu"><a href="About Us C.html">Contact Us</a></li>
			<li class="menu"><a href="About Us C.html">About Us</a></li>
	<form class="form-inline" style="float:right;">
		<input class="search-box" type="text" placeholder="Search">
		<button class="search" onclick="#">Search</button>
    </form>
</ul>

	

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15843.300821392853!2d79.97522049999998!3d6.911492700000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1601314311822!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div class="rightdetails" align="left">

	<p>Resturant Name:-Italiano</p>
	<p>Order Number:-1239PE</p>
	<p>Rider Name:-Bimsara</p>
	<p>Vehicle Name:- QW-2638</p>
	
		
		<button onclick="location.href = 'rider reviews page K.php';" class="search" >Show Rider Reviews</button>
		<button onclick="location.href = 'Home C.php';" class="search" >Delivered</button>
		

</div>



</div>
<div class="bot">
<ul class="botm">
		<li><a href="#">Home</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">About</a></li>

</ul>
		<img src="images/4.png" class="icons">
		<img src="images/5.png" class="icons">
		<img src="images/3.png" class="icons">
		<img src="images/2.png" class="icons">
		<img src="images/1.png" class="icons">
		
		<img src="images/6.png" class="but" height="45px" width="110px" >
		<img src="images/7.png" class="but" height="36px" width="110px" >
</div>

</body>
</html>
