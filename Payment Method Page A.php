<!DOCTYPE HTML>
<html>
<head>
<title>Hunger Run</title>
<link rel="stylesheet" href="styles/style5.css"/>
<link rel="stylesheet" href="styles/styless5.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/myScript5.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
 
<h2>Italiano Restaurant</h2>
<h3>Devilled Chicken Pizza "12 Inch"<h3>
<img src="images/p1.jpg"/>
<p>A fiery blend of kotchchi chicken sausage meat with nai miris, set upon an all new kotchchi sauce base topped with onion, capsicum and a double layer of mozzarella cheese.</p>

Quantity: <input type="text" class="border" name="qty" id="qty">
</div>
<div style="margin : 80px 70px;" class="container">
<h2 for="gender" style="margin-left:15%;">Select Your Payment Method</h2><br>
	<div style="margin-left:15%;"><input type="radio" id="cod" name="payment" value="cod" onclick="enableButton1()" checked>
	<label for="male">Cash On Delivery</label><br>
	<input type="radio" id="visa" name="payment" value="visa" onclick="enableButton2()" checked>
	<label for="female">By VISA</label><br>
	<input type="radio" id="other" name="payment" value="other" onclick="enableButton3()" checked>
	<label for="other">By MasterCard or Debit Card </label></div><br><br>
</div>
	
<div class="row" style="margin:30px 20px;">
  <div class="col-75">
    <div class="container">
     
      
        <div class="row">
          <div class="col-50">
            <h3>Delivery Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="with initials" Required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="anjana@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="142/B Andiambalama,Katunayake" Required>
            
			<label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Colombo 6">
			
			<label for="phone"><i class="fa fa-phone"></i> Contact Number</label>
            <input type="text" id="phone" name="phone" placeholder="071-#######" Required>

            <div class="row">
              
            </div>
          </div>
			<br><br>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" Required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" Required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" Required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" Required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" Required>
              </div>
            </div>
          </div>
          
        </div>

        <input type="submit" id="btn" value="Continue to checkout" class="btn" name="btnSubmit" disabled>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h4>
      <p>Pizza = Rs 1500 <span class="price">Rs.1500 * Quantity</span></p>
	  <br>
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs.Calculating...</b></span></p>
    </div>
  </div>
</div>

<center>
<button onclick="location.href = 'Order Progession G.php';" class="search" >Next</button>
</center>			
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
<?php
	if(isset($_POST['btnSubmit']))
	{
		$a=$_POST["qty"];
		$b="Italiano";
		$c="Bimsara";
		$d="Devilled Chicken Pizza";
		$e=6000.00;
		
		$sql3="SELECT FullName FROM customer_details";
		$result=$conn->query($sql3);
	
		$row=$result->fetch_assoc();
		$f=$row["FullName"];
		
		$sql="INSERT INTO order_details(OrderNumber,Restaurant,Rider,Item,Quantity,Total)VALUES('','$b','$c','$d','$a','$e')";
		$sql1="INSERT INTO restaurant_details(OrderNumber,Item,Quantity,Total)VALUES('','$d','$a','$e')";
		$sql2="INSERT INTO rider_details(OrderNumber,CustomerName,Restaurant,Total)VALUES('','$f','$b','$e')";
		
	if($conn->query($sql)){
		echo"Inserted successfully";
	}
	else{
		echo "Error:".$conn->error;
	}
	if($conn->query($sql1)){
		echo"Inserted successfully";
	}
	else{
		echo "Error:".$conn->error;
	}
	if($conn->query($sql2)){
		echo"Inserted successfully";
	}
	else{
		echo "Error:".$conn->error;
	}
	}			
$conn->close();

?>