<?php
	require 'config.php';
?>
<!DOCTYPE html>

<head>
	<title>My account</title>
	<link rel="stylesheet" href="styles/style3.css"/>
	
</head>
<body style="background-color:#F2C7DF;" class="font">

	<img src="images/Hunger run logo.png" class="logo"/>

<div class="header">
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
<div class="bodylog">
		
		
		<div class="userData">
				<p> <img src="Images/male_avatar.png" id="avatar" alt="Profile picture" align="left">
				Manage your basic info & <br>personalize your Profile</p>
				<p><br></p>
			<div class="dataUA">
<?php			
$sql="SELECT * FROM customer_details";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

				echo "<p id=\"datafnm\">Full Name:- ".$row["FullName"]."<br></p>";
				echo "<p id=\"dataadd\">Address:- ".$row["Address"]."<br></p>";
				echo "<p id=\"dataphn\">Phone Number:- ".$row["Contact"]."<br></p>";
				echo "<p id=\"dataem\">e-mail Address:- ".$row["Email"]."<br></p>";
				echo "Current Password:-<input id=\"dataPassw\" class=\"inptbox \"type=\"password\" value=\"12345\">";
				echo "<input type=\"checkbox\" onclick=\"showpass()\">Show";
				echo "<p id=\"dataGen\">Gender:- Male<br></p>";
?>
				<input type=submit id="edit" value="Change">
			</div>	
		</div>
		<div class="userinpt">
				
				<form id="dataUA2" method="Post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
					<label>Full Name (max 30 characters)</label>
					<input name="fname" type="text" class="inptbox" id="i1" maxlength="30" value="Supun Caldera">
					<br><br>
					<label>Address (max 100 characters)</label>
					<input name="address" type="text" class="inptbox" id="i2" maxlength="100" value="No 34,Temple Road,Rajagiriya.">
					<br><br>
					<label>Phone Number (max 20 characters)</label>
					<input name="phone" type="number" class="inptbox" id="i3" min="10" max="20" placeholder="0811237352">
					<br><br>
					<label>e-mail Address (max 50 characters)</label>
					<input name="email" type="text" class="inptbox" id="i4" maxlength="50" value="supun@gmail.com">
					<br><br>
					<label>Current password (min 5, max 10 characters)</label>
					<input name="pswn" type="password" class="inptbox" id="i5" value="12345">
					<input type="checkbox" onclick="showpass2()">Show
					<br><br>
					<input type="radio" id="m" name="gender" value="Male" checked="checked">Male
					<input type="radio" id="f" name="gender" value="Female">Female
					<br><br>
					<input type=submit id="save" value="Save changes" name="btnSubmit">
				</form>
		</div>
</div>

<div class="bot1">

		<img src="images/4.png" class="icons">
		<img src="images/5.png" class="icons">
		<img src="images/3.png" class="icons">
		<img src="images/2.png" class="icons">
		<img src="images/1.png" class="icons">
		
		<img src="images/6.png" class="but" height="45px" width="110px" >
		<img src="images/7.png" class="but" height="36px" width="110px" >
</div>
<script type="text/javascript" src="js/juapage.js">
</script>
</body>
</html>

<?php
	if(isset($_POST['btnSubmit']))
	{
		$a=$_POST["fname"];
		$b=$_POST["phone"];
		$c=$_POST["address"];
		$d=$_POST["email"];
		$e=$_POST["pswn"];
		
		$sql1="SELECT FullName FROM customer_details";
		$result=$conn->query($sql1);
	
		$row=$result->fetch_assoc();
		$f=$row["FullName"];
		
		$sql2="UPDATE customer_details SET FullName='$a',Contact='$b',Email='$d',Address='$c',Password='$e' WHERE FullName='$f'";
		
		if($conn->query($sql2)){
			echo"Updated successfully";
		}
		else{
				echo "Error:".$conn2->error;
		}
	}
				
	$conn->close();
?>

