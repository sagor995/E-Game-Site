<?php

	$con = mysqli_connect("localhost","root","","e_game_site");

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MYSQL: ".mysqli_connect_error();
	}

// Getting the user ip Address
function getIp() {

    $ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}
//Creating the shopping cart
 function getCart(){

 	if (isset($_GET['add_cart'])) {

		global $con;

		$ip=getIp();

 		$cart_product_id=$_GET['add_cart'];

 		//query for check if this product added by user or not ofr prevent duplicate insertion
 		$cart_run_check=$con->query("select * from cart where ip_address='$ip' AND product_id='$cart_product_id'");

 		if (mysqli_num_rows($cart_run_check)>0) {
 			echo "";
 		}else{
 				$run_products = $con->query("insert into cart(product_id,ip_address) values('$cart_product_id','$ip')");

 				echo "<script>window.open('index.php','_self')</script>";
 		}
 	}
 }

 //getting the total added items
 function total_items(){
 		if (isset($_GET['add_cart'])) {

	 			global $con;

	 			$ip=getIp();

	 			$run_items=$con->query("select * from cart where ip_address='$ip'");
	 			$count_items=mysqli_num_rows($run_items);

 			}else{

				global $con;
 				$ip=getIp();

	 			$select_items=$con->query("select * from cart where ip_address='$ip'");
	 			$count_items=mysqli_num_rows($select_items);
 			}
 			echo $count_items;
 }

 //getting the total price of the items
function total_price(){
						$total=0;

						global $con;

						$ip=getIp();

						$select_ip=$con->query("select * from cart where ip_address='$ip'");
						while ($p_ip=mysqli_fetch_array($select_ip)) {
							$p_id=$p_ip['product_id'];

							$p_price=$con->query("select * from products where product_id='$p_id'");

							while ($pro_price=mysqli_fetch_array($p_price)) {
								$product_price=array($pro_price['product_price']);

								$values=array_sum($product_price);
								$total+=$values;
							}
						}
			echo '$'.$total;
}

//getting the categories

function getDevelopers(){
	global $con;

	$run_developers = $con->query("select * from developers limit 8");

	while($row_developers=mysqli_fetch_assoc($run_developers)){
			$developer_id = $row_developers['developer_id'];
			$developer_title = $row_developers['developer_title'];

			echo "<li><a href='index.php?devs=$developer_id'><center>$developer_title</center></a></li>";

	}
}



function getProducts(){


	if (!isset($_GET['devs'])) {
	
	
	global $con;

	$run_products = $con->query("select * from products order by product_id desc limit 0,8");

	while($row_products=mysqli_fetch_assoc($run_products)){

			$product_id = $row_products['product_id'];
			$product_title = $row_products['product_title'];
			$product_cat = $row_products['product_cat'];
			$product_developers = $row_products['product_developers'];
			$product_price =$row_products['product_price'];
			$product_image = $row_products['product_image'];



			echo "
					
				<div id='single_product'>

					<h4 id='gameHomePAgeTitle'>$product_title</h4>

					<img src='admin_panel/product_images/$product_image' width='200' height='180' />

					<p id='price'><b>Price: $ $product_price</b></p>.</br>

					<a href='view.php?product_id=$product_id' style='float:left;color: white;'>View</a>

					<a href='index.php?add_cart=$product_id'><button class='button button2' style='float:right;'>Add to Cart</button></a>
				</div>


			";

		}
	}
}


//devloper base product will be shown
function getDevProducts(){


	if (isset($_GET['devs'])) {
		$developer_id = $_GET['devs'];
	
	global $con;

	$run_dev_products = $con->query("select * from products where product_developers='$developer_id'");

	$count_developers=mysqli_num_rows($run_dev_products);

		if ($count_developers==0) {
					echo "<h3><marquee behavior='alternate' direction='right'>There is no product available of this developer!!!</marquee></h3>";
					exit();
					}
	

	while($row_dev_products=mysqli_fetch_assoc($run_dev_products)){

			$product_id = $row_dev_products['product_id'];
			$product_title = $row_dev_products['product_title'];
			$product_cat = $row_dev_products['product_cat'];
			$product_developers = $row_dev_products['product_developers'];
			$product_price =$row_dev_products['product_price'];
			$product_image = $row_dev_products['product_image'];



			
			echo "
					
				<div id='single_product'>

					<h4 id='gameHomePAgeTitle'>$product_title</h4>

					<img src='admin_panel/product_images/$product_image' width='200' height='180' />

					<p id='price'><b>Price: $ $product_price</b></p>.</br>

					<a href='view.php?product_id=$product_id' style='float:left;color: white;'>View</a>

					<a href='index.php?product_id=$product_id'><button style='float:right;background-color: #4CAF50;border-radius: 8px;'>Add to Cart</button></a>
				</div>


			";
		

		}
	}
}


/*Slide show*/

function getSlideProducts($pro_id){


	
	
	
	global $con;

	$run_products = $con->query("select * from products where product_id <> '$pro_id' order by rand() limit 0,4");

	while($row_products=mysqli_fetch_assoc($run_products)){

			$product_id = $row_products['product_id'];
			$product_title = $row_products['product_title'];
			$product_cat = $row_products['product_cat'];
			$product_developers = $row_products['product_developers'];
			$product_price =$row_products['product_price'];
			$product_image = $row_products['product_image'];



			echo "
					
				<div id='slide_product'>

					<a href='view.php?product_id=$product_id' style='float:left;color: white;'><h4 id='gameHomePAgeTitle'>$product_title</h4></a>
					</br>
					<a href='view.php?product_id=$product_id' style='float:left;color: white;'><img src='admin_panel/product_images/$product_image' width='200' height='180' /></a>

					</br>
				</div>


			";

		}
	
}


?>


