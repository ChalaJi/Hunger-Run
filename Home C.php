<!DOCTYPE HTML>
<html>
<head>
<title>Hunger Run</title>
<link rel="stylesheet" href="styles/style1.css"/>
</head>
<body style="background-color:#F2C7DF;" class="font">
	
	<script src="js/myScript1.js"></script>

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
			<li class="menu"><a href="#">Home</a></li>
			<li class="menu"><a href="OrderHistory G.php">Order History</a></li>
			<li class="menu"><a href="About Us C.html">Contact Us</a></li>
			<li class="menu"><a href="About Us C.html">About Us</a></li>
</ul>
<br>
<div class="container">
	<img src="images/food.png" width="100%" height="400px">	
	<div class="centered">Your favorite food, delivered with Hunger Run<br>
	<form>
	<input id="SH"class="search-box" type="text" placeholder="Search Restaurants" style="width:500px">
	</form> <button class="search" onclick="Function3()">Search</button>
	</div>
</div>
</div>

<center>
<button onclick="location.href = 'User account H.php';" class="search" >Show Profile</button>
</center>

<a href="" class="boxL" onclick="Function2()">
	<div class="boxS">
	<img src="images/bread.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Perera & Sons Bakers</h1>
	<h3 style="color:#B8288D;">Malabe</h3>
	<h3 style="color:#e8a905;">Rating - 4.7/5.0</h3>
	<h3>Estimated delivery time - 30-40 mins</h3>
	</div>
</a>
<br/>
<a href="" class="boxL">
	<div class="boxS">
	<img src="images/burgers.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Royal Burger</h1>
	<h3 style="color:#B8288D;">Borella</h3>
	<h3 style="color:#e8a905;">Rating - 4.0/5.0</h3>
	<h3>Estimated delivery time - 25-35 mins</h3>
	</div>
</a>
<br/>
<a href="" class="boxL">
	<div class="boxS">
	<img src="images/indian.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Sri Ananda Bawan</h1>
	<h3 style="color:#B8288D;">Battaramulla</h3>
	<h3 style="color:#e8a905;">Rating - 3.6/5.0</h3>
	<h3>Estimated delivery time - 50-60 mins</h3>
	</div>
</a>
<br/>
<a href="" class="boxL">
	<div class="boxS">
	<img src="images/mexican.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Mexican Food Corner</h1>
	<h3 style="color:#B8288D;">Colombo 7</h3>
	<h3 style="color:#e8a905;">Rating - 5.0/5.0</h3>
	<h3>Estimated delivery time - 15-25 mins</h3>
	</div>
</a>
<br/>
<a href="" class="boxL">
	<div class="boxS">
	<img src="images/drinks.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Drinks Hub</h1>
	<h3 style="color:#B8288D;">Nugegoda</h3>
	<h3 style="color:#e8a905;">Rating - 3.8/5.0</h3>
	<h3>Estimated delivery time - 30-40 mins</h3>
	</div>
</a>
<br/>
<a href="" class="boxL">
	<div class="boxS">
	<img src="images/sri lankan.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Gami Gedara</h1>
	<h3 style="color:#B8288D;">Kotte</h3>
	<h3 style="color:#e8a905;">Rating - 4.7/5.0</h3>
	<h3>Estimated delivery time - 20-30 mins</h3>
	</div>
</a>
<br/>
<a href="Restaurant Page A.php" class="boxL">
	<div class="boxS">
	<img src="images/Italian.png" style="border-radius:10px;height:200px;width:300px;">
	</div>
	<div style="float:left;">
	<h1 style="color:#B8288D;">Italiano</h1>
	<h3 style="color:#B8288D;">Koswatta</h3>
	<h3 style="color:#e8a905;">Rating - 4.4/5.0</h3>
	<h3>Estimated delivery time - 5-15 mins</h3>
	</div>
</a>
<br/>

<div class="bot">
<ul class="botm">
		<li><a href="#">Home</a></li>
		<li><a href="OrderHistory G.php">Order History</a></li>
		<li><a href="About Us C.html">Contact Us</a></li>
		<li><a href="About Us C.html">About Us</a></li>
</ul>
		<img src="images/4.png" class="icons">
		<img src="images/5.png" class="icons">
		<img src="images/3.png" class="icons">
		<img src="images/2.png" class="icons">
		<img src="images/1.png" class="icons">
		
		<a href=https://play.google.com/store?hl=en><img src="images/6.png" class="but" height="45px" width="110px" ></a>
		<a href=https://www.apple.com/><img src="images/7.png" class="but" height="36px" width="110px" ></a>
</div>

</body>
</html>
