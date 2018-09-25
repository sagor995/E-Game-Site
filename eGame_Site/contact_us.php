
<!DOCTYPE html>
<?php
session_start();

?>

<head>
	<Title> Pc Game | Download Game</Title>
	<link rel="stylesheet" href="styles/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="message_design.css">
<head>
<body>


	<?php
	include 'includes/db.php';
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
								<h1 id="message_heading">Write your message here please</h1>

								<form name="message_input" id="message_input" action="" method="post">
									<div class="row">
										<label for="subject" class="labels">Subject:</label>
										<input type="text" name="subject" id="subject" class="input_field_message">
									</div>

									<div class="row">
										<label for="message" class="labels" style="vertical-align: top;">Message:</label>
										<textarea form="message_input" name="message" id="message" class="input_field_message" style="resize: none; font-family: Verdana; height: 250px;" placeholder="max. 200 characters">
											
										</textarea>
									</div>

									<input type="submit" name="message_submit" value="Submit" class="buttons">
								</form>

								<?php
									if(isset($_POST['message_submit'])){
										$ip=getIp();
										$subject = $_POST['subject'];
										$message = $_POST['message'];
										$email=$_SESSION['customer_email'];


										$run=$con->query("select * from customer where customer_ip='$ip'");
									while ($row=mysqli_fetch_array($run)) {
											$name=$row['customer_name'];
										}

										$query = "INSERT INTO `messages`(`customer_ip`, `customer_name`, `customer_email`, `subject`, `message`) VALUES ('$ip','$name','$email', '$subject', '$message')";
										$result = mysqli_query($con,$query);
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
