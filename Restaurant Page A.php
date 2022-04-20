<!DOCTYPE HTML>
<html>
<head>
<title>Hunger Run</title>
<link rel="stylesheet" href="styles/style5.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/myScript5.js"></script>
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
		<input class="search-box" type="text" placeholder="Food/Restaurant">
		<button class="search" onclick="#">Search</button>
    </form>
</ul>	
</div>

<h2 class="res"><b><a href="#">Italiano Restaurant</a></b>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star "></span>
</h2>


<img src="images/res1.jpg" class="res1"/>
<br>
<center>
<button onclick="location.href = 'restaurant reviews page K.php';" class="search" >Restaurant Reviews</button>
</center>
<br><br><br><br>

<div class="cat">
		<button class="button button1" type="button" id="button1" onclick="loadData('button1')">Deserts</button>
		<button class="button button1" type="button" id="button2" onclick="loadData('button2')">Breakfast</button>
		<button class="button button1" type="button" id="button3" onclick="loadData('button3')">Lunch</button>
		<button class="button button1" type="button" id="button4" onclick="loadData('button4')">Dinner</button>
		
	</div>
	<b><p class="text1" id="para" style="margin-left:40%;"></p></b>
	<a href="img1"><img id="img1" src="" class="cat1"></a>
	<a href="img2"><img id="img2" src="" class="cat1"></a>
	<a href="img3"><img id="img3" src="" class="cat1"></a>

<button class="buttonn1" style="vertical-align:left"><span>Show More </span></button>

<div class="cat">
		<button class="button button2" type="button" id="button5" onclick="loadDataa('button5')">Bakery Corner</button>
		<button class="button button2" type="button" id="button6" onclick="loadDataa('button6')">Authentic Indian Cuisines</button>
		<button class="button button2" type="button" id="button7" onclick="loadDataa('button7')">Pizza Oven</button>
		<button class="button button2" type="button" id="button8" onclick="loadDataa('button8')">Special Set Menu</button>
	</div>
	<b><p class="text1" id="para1" style="margin-left:40%;"></p></b>
	<a href="Payment Method Page A.php"><img id="img4" src="" class="cat1"></a>
	<a href="img5"><img id="img5" src="" class="cat1"></a>
	<a href="img6"><img id="img6" src="" class="cat1"></a>

<button class="buttonn1" style="vertical-align:left"><span>Show More </span></button>

<hr class="hrr"/>

<button class="buttonn1" style="vertical-align:left"><span>Next Page</span></button>

<table>
<h3 class="cat">Recommended Restaurants/Food courts</h3>
<tr>
<td><div class="card">
  <img src="images/giman.jpg" alt="giman hala" style="width:100%">
  <h3>GimanHala Restaurant and Bakery</h3>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
  <p><button>View</button></p>
</div>
</td>

<td><div class="card">
  <img src="images/brick.jpg" alt="brick" style="width:100%">
  <h3> Brickwall Restaurant and <br>Cafe</h3>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star "></span>
  <p><button>View</button></p>
</div>
</td>

<td><div class="card">
  <img src="images/laguna.jpg" alt="laguna" style="width:100%">
  <h3>La Laguna Restaurant and <br>Pub</h3>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star checked"></span>
	<span class="fa fa-star "></span>
	<span class="fa fa-star "></span>
  <p><button>View</button></p>
</div>
</td>

</tr>
</table>
<center><button class="buttonn1" style="vertical-align:left"><span>View More</span></button></center>

<hr class="hrr"/>

<div class="bot">
<ul>
	<center>
		<br/><a href="#"><li class="botm">Home</li></a><br/>
		<a href="#"><li class="botm">News</li></a><br/>
		<a href="#"><li class="botm">Contact Us</li></a><br/>
		<a href="#"><li class="botm">About Hunger Run</li></a><br/>
	</center>
</ul>
		<a href="https://lk.linkedin.com/"><img src="images/4.png" class="icons"></a>
		<a href="https://www.instagram.com/?hl=en"><img src="images/5.png" class="icons"></a>
		<a href="https://twitter.com/?lang=en"><img src="images/3.png" class="icons"></a>
		<a href="https://www.google.lk/webhp?tab=rw"><img src="images/2.png" class="icons"></a>
		<a href="https://www.facebook.com/"><img src="images/1.png" class="icons"></a>
		
		<a href="https://play.google.com/store"><img src="images/6.png" class="but" height="45px" width="110px"/></a>
		<a href="https://www.apple.com/app-store/"><img src="images/7.png" class="but" height="35px" width="110px"/></a>
		
		<br/><br/><br/><p style="text-align:right;" class="botm"><a href="#" class="botm">Privacy Policy & Terms</a> © 2020 Hunger Run Technologies Inc.</p></font>	
</div>

</body>
</html>
