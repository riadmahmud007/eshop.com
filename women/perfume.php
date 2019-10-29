<?php include ( "../inc/connect.inc.php" ); ?>
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
	<title>Perfume</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php include ( "../inc/mainheader.inc.php" ); ?>
	<div class="categolisa">
	<h3>Smartphone</h3>
		
	</div>
	<div class="categolis">
	<center><h2>Perfume</h2></center>
		
	</div>
	
	<div class="pro_left">
		
		
  <center><h3 class="w3-bar-item">Product Category</h3></center>
 <center> <li><a href="smartphone.php" class="w3-bar-item w3-button">Smartphone</a></li>
  <li><a href="tshirt.php" class="w3-bar-item w3-button">T-Shirts</a></li>
  <li><a href="watch.php" class="w3-bar-item w3-button">Watches</a></li>
   <li><a href="perfume.php" class="w3-bar-item w3-button">Perfume</a></li>
    <li><a href="laptop.php" class="w3-bar-item w3-button">Laptops</a></li>
	 <!-- <li><a href="headphone.php" class="w3-bar-item w3-button">Headphne</a></li>-->
	  <li><a href="speaker.php" class="w3-bar-item w3-button">Speaker</a></li>
	   <li><a href="camera.php" class="w3-bar-item w3-button">Camera</a></li>
  </center>
  
  
</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Product</h3>
			
	
	
	
	
	<div style=" float: left;font-size: 25px; margin: 0 auto; display: table; width: 80%;">
		<div>
		<?php 
			$getposts = mysql_query("SELECT * FROM products WHERE available >='1' AND item ='perfume'  ORDER BY id DESC LIMIT 10") or die(mysql_error());
					if (mysql_num_rows($getposts)) {
					echo '<ul id="recs">';
					while ($row = mysql_fetch_assoc($getposts)) {
						$id = $row['id'];
						$pName = $row['pName'];
						$price = $row['price'];
						$description = $row['description'];
						$picture = $row['picture'];
						
						echo '
							<ul style="float: left;">
								<li style="float: left; padding: 0px 25px 25px 25px;">
									<div class="home-prodlist-img"><a href="view_product.php?pid='.$id.'">
										<img src="../image/product/perfume/'.$picture.'" class="home-prodlist-imgi">
										</a>
										<div style="text-align: center; padding: 0 0 6px 0;"> <span style="font-size: 15px;">'.$pName.'</span><br> Price: '.$price.' Tk</div>
									</div>
									
								</li>
							</ul>
						';

						}
				}
		?>
			
		</div>
	</div>
	
	</div>
		</div>	
			
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>