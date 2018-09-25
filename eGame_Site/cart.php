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
	//must be used to use session in this page;
	
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
							echo "<b>Welcome:<b/>".$_SESSION['customer_email']." | <b style='color: orange'>Your </b>";
						}else{
							echo "<b>Welcome Guest!</b>";
						}
					?>
					<b style="color: orange"> Shopping Cart -</b> Total Items: <?php total_items(); ?> Total Price: <?php total_price(); ?>  | <a href="index.php" style="color: orange;"> Back To Buy</a>

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
				<<!-- div id="banner_area" >
						<img src="images\slide_images\asphalt.png">
				</div> -->
				<!--feature Area starts -->

				<!--Content Area starts -->
				<div id="content_area">



						<div id="products_box">
							<br>
							<center><form action="" method="post" enctype="multipart/form-data">
									<table align="center" width="700" bgcolor="#1E90FF" style="border: 3px double white;border-spacing: 5px;">
										<tr align="center">
											<th>Remove</th>
											<th>Product(S)</th>
											<th>Quantity</th>
											<th>Total Price: </th>
										</tr>

										<?php
											$total=0;
											$quantity=1;
											global $con;

											$ip=getIp();

											$select_ip=$con->query("select * from cart where ip_address='$ip'");
											while ($p_ip=mysqli_fetch_array($select_ip)) {
												$p_id=$p_ip['product_id'];
												$p_price=$con->query("select * from products where product_id='$p_id'");

												while ($pro_price=mysqli_fetch_array($p_price)) {
													$product_price=array($pro_price['product_price']);

													$product_title=$pro_price['product_title'];
													$product_image=$pro_price['product_image'];
													$single_price=$pro_price['product_price'];

													 $value=array_sum($product_price);;
													 $total+=$value;
										?>

										<tr align="center">
											<td><input type="checkbox" name="remove[]" value="<?php echo $p_id; ?>"></td>
											<td><?php echo $product_title; ?><br>
												<img src="admin_panel/product_images/<?php echo $product_image; ?>" width="100px" height="100px"/>
											</td>
											<td><input type="text" size="4" name="quantity" value="<?php echo $_POST['quantity']; ?>"/></td>
											<?php

												
												if (isset($_POST['update_cart'])) {
													$quantity=$_POST['quantity'];
													$update_quantity=$con->query("update cart set quantity='$quantity'");
													//to keep the quantity value in the session box 
													//default arrays $_POST,$_GET,S_files,S_seddion super global arrays predefined in php

													$_POST['quantity']=$quantity;

													$total=$total*intval($quantity);
												}

												global $con;
												$ip=getIp();



												if (isset($_POST['update_cart'])) {
													foreach ($_POST['remove'] as $removeID) {
														$delete_product=$con->query("delete from cart where product_id='$removeID' AND ip_address='$ip'");
														if($delete_product){
																//redirect the sam page	
															echo "<script>window.open('cart.php','_self')</script>";

														}

													}
												}

												if (isset($_POST['continue'])) {
													echo "<script>window.open('index.php','_self')</script>";
												}

											?>

											<td><?php echo '$'.$single_price; ?></td>
										</tr>

										<?php
												}
											}
										?>	

										<tr align="right">
											<td colspan="4"><h2 ><b>Sub Total: </b></h2></td>
											<td ><h2 style="margin-right: 10px"><?php echo '$'.$total; ?></h2></td>
										</tr>

										

										<tr align="center">

											<td ><input type="submit" name="update_cart" value="Update Cart"/></td>
											<td colspan="2"><input type="submit" name="continue" value="Continue Buying"/></td>
											<td colspan="2">  <a href="checkout.php?product_price=<?php echo $total; ?>" style="text-decoration: none;font-size: 15px;border: 2px solid black; background: white; padding: 2px;"> Checkout</a> </td>
										</tr>

									</table>

							</form></center>

							

							<br>
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
