
<?php

session_start();
 include("includes\db.php"); 
 include("functions/functions.php");
 include("functions/functions2.php");
?>
<!DOCTYPE html>


<head>
	<Title> Pc Game | Download Game</Title>
	<link rel="stylesheet" href="styles/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="styles/mastercard_design.css">
<head>
<body>

	<!--Main Container Starts From Here -->
	<div class="main_wrapper">
			
			<!--Header Starts From Here -->
			<div class="header_wrapper">

				<a href="index.php"><img id="header_logo" src="images/<?php getHeaderImg(); ?>"/></a>
				<img id="header_banner" src="images/<?php getCoverAdsImg(); ?>"/>
			</div>
			<!--Header Ends Here -->
			<?php getCart();?>
			<!--shopping cart starts -->
			<div id="shopping_cart">

					<span style="float: right; font-size: 18px; padding: 5px; line-height: 30px;">
					<?php
						if (isset($_SESSION['customer_email'])){
							echo "<b>Welcome:<b/>".$_SESSION['customer_email']." | <b style='color: orange'>Your </b>";
						}else{
							echo "<b>Welcome Guest!</b>";
						}
					?>

					 <b style="color: orange"> Shopping Cart -</b> Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?>  | <a href="cart.php" style="color: orange;"> Go To Cart</a>
				</span>

			</div>
			<!--shoppung carts Ends Here -->

			<!--Menubar starts -->
			<div class="menubar">

					<div id="form">
						
						<form method="get" action="results.php" enctype="multipart/form-data">
								<input type="text" name="user_query" placeholder="Search..." />
								<input type="submit" name="search" value="Search" />

						</form>

					</div>

					<ul id="menu">
						<li><a href="all_games.php">All Games</a></li>
						<li><a href="my_account.php">MyAccount</a></li>
						<li><a href="cart.php">Shopping Cart</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="support.php">FAQ</a></li>
						<li>
							<?php
					if (!isset($_SESSION['customer_email'])) {

						echo "<b><a href='checkout.php' style='text-decoration: none;color: orange'>Login</a></b>";

					}else{
						echo "<b><a href='logout.php' style='text-decoration: none;color:orange'>Logout</a></b>";

					}
					?>
						</li>
					</ul>



					
			</div>
			<!--Menubar Ends -->

			<!--Slide part starts -->
			<div class="slide_wrapper">
				
				<!--Sidebar starts -->
				<div id="Adsbar">
						<div id="stitle"><center>Game Developers</center></div>
						<ul id="devs">
								<?php 

									getDevelopers();
								?>

						</ul>
						
				</div>
				<!--Sidebar ends -->

				<div id="slide_area">
					<img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide1(); ?>" style="width:100%">
						<img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide2(); ?>" style="width:100%">
 						 <img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide3(); ?>" style="width:100%">
 						 <img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide4(); ?>" style="width:100%">
  						<img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide5(); ?>" style="width:100%">
  						<img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide6(); ?>" style="width:100%">
  						<img class="mySlides w3-animate-fading" src="images\slide_images\<?php getImgSlide7(); ?>" style="width:100%">

  				</div>
  						<script>
							var myIndex = 0;
							carousel();

							function carousel() {
							    var i;
							    var x = document.getElementsByClassName("mySlides");
							    for (i = 0; i < x.length; i++) {
							       x[i].style.display = "none";  
							    }
							    myIndex++;
							    if (myIndex > x.length) {myIndex = 1}    
							    x[myIndex-1].style.display = "block";  
							    setTimeout(carousel, 4000);    
							}
						</script>
				
				
			</div>
			<!--Slide part Ends -->
			

				<!--feature Area starts -->
				<!-- <div id="feature_area" style="height: 70px;background: black;">
						<marquee behavior='scroll' direction='left'><h3 >Welcome To Our Site. Current News:New Update Available Download Asphalt 2018!!!  ||  Despite the launch of two new consoles last year, PC dominated much of the conversation in 2017 thanks to the phenomenal success of PlayerUnknown's Battlegrounds, which released in Early Access in March and proceeded to shatter player and sales records throughout the remainder of the year. But while PUBG may have been the platform's biggest success story in 2017, it certainly wasn't the only noteworthy PC game to come out last year, with critically acclaimed titles like Divinity: Original Sin II and Doki Doki Literature Club all releasing exclusively for the platform. </h3></marquee>

				</div> -->
				<!--feature Area starts -->
				<!--feature Area starts -->
				<!-- <div id="banner_area" >
						<img src="images\slide_images\asphalt.png">
				</div> -->
				<!--feature Area starts -->

				<!--Content Area starts -->
				<div id="content_area">
						<div id="products_box">
								<?php
										//if customer email is not already log in then
										if (!isset($_SESSION['customer_email'])) {
											include "customer_login.php";
										}else{
											
											
											include "payment.php";

										}



								?>
						</div>
				</div>
				<!--Content Area starts -->
			
			<!--Footer starts -->
			<div class="footer_wrapper">
					<center><h3>&copy;2017 Pc Game. All rights reserved.<b> | </b><a href="contact_us.php" id="contact_us">Contact Us</a></center>
			</div>

			<!--Footer Ends -->

	</div>
	<!--Main Container Ends Here -->

<body>

</html>
