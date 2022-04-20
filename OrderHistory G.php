<!DOCTYPE HTML>
<html>
<head>
<title>Order History</title>
<link rel="stylesheet" href="styles/style4.css"/>
<style>
  .bordered {
    width: 1400px;
    height: 300px;
    padding: 20px;
    border: 2px groove black;
    border-radius: 8px;
  }
</style>
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
			<li class="menu"><a href="#">Order History</a></li>
			<li class="menu"><a href="About Us C.html">Contact Us</a></li>
			<li class="menu"><a href="About Us C.html">About Us</a></li>
	<form class="form-inline" style="float:right;">
		<input class="search-box" type="text" placeholder="Search">
		<button class="search" onclick="#">Search</button>
    </form>
</ul>
 
	<?php
	
	$sql="SELECT * FROM order_details";
	$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){

echo "<div >";
echo "<br><br>";
echo "<fieldset>";

echo  "<img src=\"images/Italian.png\" id=\"cen\" height=\"100px \"width=\"150px\" >";
echo  "<h3 align=\"center\" id=\"new2\">".$row["Restaurant"]."</h3>";
echo  "<h4 align=\"center\" id=\"new3\">".$row["Item"]."</h4>";
echo  "<h3 align=\"center\" id=\"new3\">Quantity</h3>";
echo  "<h4 align=\"center\" id=\"new3\">".$row["Quantity"]."</h4>";
echo  "<h3 align=\"center\" id=\"new3\">Delivered by</h3>";
echo  "<p align=\"center\" id=\"new3\">".$row["Rider"]."</p><hr>";
  
echo  "<div class=\"order\">";
echo	  "<center>";
echo	"<h1 id=\"new1\">".$row["OrderNumber"]."</h1><br>";
echo	"<h4 id=\"new\">order number</h4>";
echo  "<h1 id=\"new1\">Rs.".$row["Total"]."</h1><br>";
echo  "<h4 id=\"new\">Total</h4>";
echo  "</center>";
echo  "</div>";

echo "</fieldset>";
echo  "<br><br>";
echo  "</div>";

}
}
$conn->close();
?>

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
