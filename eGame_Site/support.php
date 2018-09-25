
<!DOCTYPE html>
<?php
session_start();

?>

<head>
	<Title> Pc Game | Download Game</Title>
	<link rel="stylesheet" href="styles/style.css" media="all">
<head>
<body>


	<?php
	include("functions/functions.php");
	include("functions/functions2.php");
	?>

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
							echo "<b>Welcome:<b/>".$_SESSION['customer_email'];
						}
					?>
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
				
				<!--Content Area starts -->
				<div id="content_area">
						<div id ="products_box">
								<h1><b>General FAQs</b></h1>
								<div id="column"><h2 style="color: #ffa500;">TECHNICAL</h2>
										<ul>
											<li><a href="#">How do I transfer my progress to another device <br>or recover it after reinstallation?</a></li>
											<li><a href="#">How do I update games?</a></li>
											<li><a href="#">My device or firmware is not supported.</a></li>
											
										</ul>

   							</div>
								<div id="column"><h2 style="color: #ffa500;">PURCHASE</h2>
										<ul >
						
											<li><a href="#">The purchase I ordered was not delivered. What <br>should I do?</a></li>
											<li><a href="#">I was charged for something I did not order</a></li>
											<li><a href="#">How do I find the purchase confirmation?</a></li>

										</ul>
    						</div>
								<div id="column"><h2 style="color: #ffa500;">GAMEPLAY</h2>
												<ul>
						
													<li><a href="#">My account was banned. Why?</a></li>
													<li><a href="#">I can't write in the chat.</a></li>
													<li><a href="#">I am losing in-game currency for no reason.</a></li>
													
												</ul>	
    						</div>

						</div>

						<div id="about_us">
							<center><h2 style="color: white;font-size: 30px;">About US</h2></center>
							<center><ul style="font-size: 25px;color: orange;list-style: none;">
								<li>SD Lab Project</li>
								<li>Done By</li>
								<li>Sagor Ahamed</li>
								<li>Nabil Ahamed</li>
								<li>Md. Tazmilur Rahaman</li>
								<li></li>
								<li></li>
							</ul></center>
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
