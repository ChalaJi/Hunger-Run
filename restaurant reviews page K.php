<!DOCTYPE HTML>
<html>

<head>
    <title>Hunger Run</title>
    <link rel="stylesheet" href="styles/style2.css" />
</head>

<body style="background-color:#F2C7DF;" class="font">

    <img src="images/Hunger run logo.png" class="logo" />

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
    </div>


    <div class="boxL">
            <h2>Restaurant:- Italiano Restaurant</h2>
			<?php
			$sql="SELECT * FROM restaurant_reviews";
			$result=$conn->query($sql);
	
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo "<fieldset>";
			echo "<h2>Customer:- ".$row["Customer"]."</h2>";
			echo "<h2>Comment:- ".$row["Comments"]."</h2>";
			echo "</fieldset>";
			}
			}
			?>
</div>
    <form method="post"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="boxL">
            <fieldset>
                <h1>leave a comment</h1><br><br>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" size="180" style="width:99%" class="border" required><br><br>
                <label for="email">Enter your email:</label><br>
                <input type="email" id="email" name="email" size="180" style="width:99%" class="border" required> Comment:
                <br>
                <textarea name="comment"  rows="8" cols="162" required></textarea><br><br>
                <button type="submit" onclick="alert('Thankyou for your feedback')" class="search" name="btnSubmit">Submit</button><br><br>
            </fieldset>
        </div>
    </form>

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

        <a href=https://play.google.com/store?hl=en><img src="images/6.png" class="but" height="45px" width="110px"></a>
        <a href=https://www.apple.com/><img src="images/7.png" class="but" height="36px" width="110px"></a>
    </div>
</body>
</html>
<?php
	if(isset($_POST['btnSubmit']))
	{
		$d=$_POST["fname"];
		$e=$_POST["comment"];
		
		$sql="INSERT INTO restaurant_reviews(ReviewNumber,Customer,Comments)VALUES('','$d','$e')";
		
	if($conn->query($sql)){
		echo"Inserted successfully";
	}
	else{
		echo "Error:".$conn->error;
	}
	}			
$conn->close();
?>