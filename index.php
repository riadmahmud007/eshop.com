<?php include ( "inc/connect.inc.php" ); ?>
<?php 

ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysql_query("SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysql_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}
?>
<!DOCTYPE html>

<html>
	<head>
		<title>Welcome to ebuybd online shop</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		
		<!------ boylerplatecode--->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">      
		
		<script src="/js/homeslideshow.js"></script>
	</head>
	
	<body style="min-width: 580px;">
	<div class="total">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">Sing in</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">Sign up</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">Sing In</a>';
						}
					 ?>
				</div>
			</div>
			
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/logo.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="100"  placeholder="Search Here..."><input type="submit" value="Search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
			<nav class="main-menu">
		<ul>
		<li><a href="index.php" >Home</a></li>
			<li><a href="index.php">Product</a>
			<ul>
				<li><a href="women/smartphone.php" class="w3-bar-item w3-button">Smartphone</a>
 </li><li><a href="women/tshirt.php" class="w3-bar-item w3-button">T-Shirts</a></li>
  <li><a href="women/watch.php" class="w3-bar-item w3-button">Watches</a></li>
   <li><a href="women/perfume.php" class="w3-bar-item w3-button">Perfume</a></li>
    <li><a href="women/laptop.php" class="w3-bar-item w3-button">Laptops</a></li>
	 <!--<li><a href="women/headphone.php" class="w3-bar-item w3-button">Headphne</a></li>-->
	  <li><a href="women/speaker.php" class="w3-bar-item w3-button">Speaker</a></li>
	   <li><a href="women/camera.php" class="w3-bar-item w3-button">Camera</a></li>
				</ul>
				</li>
			<li><a href="about.html" target=" another">About us</a></li>
			</ul>
			
			</nav>
		<div class="home-welcome">
		
			<div class="home-welcome-text" style="Background-color: #59ABE3; height: 200px; ">
				<h1 style="margin: 0px;">Welcome To eShop</h1>
				<h2>Largest Online Shopping In Bangladesh</h2>
			</div>
		</div>
		
		
			<div class="pro_left">
		
		
<!--  <center><h3 class="w3-bar-item">Product Category</h3></center>
 <center> <li><a href="women/smartphone.php" class="w3-bar-item w3-button">Smartphone</a>
 </li><li><a href="women/tshirt.php" class="w3-bar-item w3-button">T-Shirts</a></li>
  <li><a href="women/watch.php" class="w3-bar-item w3-button">Watches</a></li>
   <li><a href="women/perfume.php" class="w3-bar-item w3-button">Perfume</a></li>
    <li><a href="women/laptop.php" class="w3-bar-item w3-button">Laptops</a></li>
	 
	  <li><a href="women/speaker.php" class="w3-bar-item w3-button">Speaker</a></li>
	   <li><a href="women/camera.php" class="w3-bar-item w3-button">Camera</a></li>
  </center>
  -->
</div>
		<div class="home-prolist">
			<div>
				<h3 style="text-align: center;">Top Product</h3>
				<a href="women/smartphone.php"><img src="image/top.jpg"/></a>
			</div>
		</div>	
		<div class="home-prolist">
			<div>
				
				<a href="women/smartphone.php"><img src="image/s10.jpg"/></a>
			</div>
		</div>
		<div class="home-prolist">
			<div>
				
				<a href="women/watch.php"><img src="image/ss.jpg"/></a>
			</div>
		</div>
			
			
			</div>	
			
<div class="riad">Powered By <a href="https://www.bubt.edu.bd/">BUBT</a> Developed By
 <a href=" https://www.facebook.com/riadkhan2050">Riad Mahmud</a> | 
 <a href="https://www.facebook.com/hasib.alhassam">Hasibul Ahsan</a> |  
 <a href="https://www.facebook.com/profile.php?id=100009143212037">Md Shohag Mia</a>
 
 </div>
</html>