<div>
<h2 style="text-align: center;">Pay Now with MasterCard</h2>
				
				<div id="mastercard_container">
					<h1 style="display: inline-block; border: 2px solid black; margin: 0px; padding-right: 100px; float: right;">Mastercard Payment</h1>
					<img src="images/mastercard.png" id="image">

					<form id="data_input" action="" method="post">
						<div class="row">
							<label for="card_number" class="labels">Card number:</label>
							<input type="text" name="card_number" id="card_number" class="input_field">
						</div>

						<div class="row">
							<label for="cardholder_name" class="labels">Cardholder name:</label>
							<input type="text" name="cardholder_name" id="cardholder_name" class="input_field">
						</div>

						<div class="row">
							<label for="billing_address" class="labels">Billing Address:</label>
							<input type="text" name="billing_address" id="billing_address" class="input_field">
						</div>

						<div class="row">
							<div id="other_info" style="display: table-cell;">
								<input type="text" name="month" id="month" placeholder="MM" maxlength="2" style="width: 30px; height: 30px;"> /
								<input type="text" name="year" id="year" placeholder="YY" maxlength="2" style="width: 30px; height: 30px;">
								<input type="text" name="cvc" id="cvc" placeholder="CVC" maxlength="3" style="width: 50px; height: 30px; margin-left: 20px;">
							</div>
							<input type="submit" name="submit" id="submit" value="Submit" style="display: table-cell; margin-left: 10px;">
						</div>

						<?php
						 include("includes\db.php"); 
							if(isset($_POST['submit'])){
								$card_number = $_POST['card_number'];
								$cardholder_name = $_POST['cardholder_name'];
								$billing_address = $_POST['billing_address'];
								$month = $_POST['month'];
								$year = $_POST['year'];
								$cvc = $_POST['cvc'];

								$ip=getIp();
								$select_ip=$con->query("select * from customer where customer_ip='$ip'");
											while ($p_ip=mysqli_fetch_array($select_ip)) {
												$p_id=$p_ip['customer_id'];
											}
								// $customer_id=;
								// $product_name=;
								// $product_quantity=;
								 $total_price=$_GET['product_price'];
								$date=date("Y/m/d");
								if(($card_number == null)||($cardholder_name == null)||($billing_address == null)||($month == null)||($year == null)||($cvc == null)){
									echo "One or more fields is empty<br>";
								}
								else{
									$result=$con->query("insert into mastercard(customer_id,customer_ip,card_num,card_name,card_address,card_mm,card_yy,card_cvc,product_quantity,total_price,date,status) 
										values('$p_id','$ip','$card_number','$cardholder_name','$billing_address','$month','$year','$cvc','1',' $total_price','$date','pending')");


									if ($result) {
											 	echo "<script>alert('Payment Successfull!')</script>";
											 	$delete_cat=$con->query("delete from cart where ip_address='$ip'");
											 	echo "<script>window.open('index.php','_self')</script>";
											 }


									

								}
							}
						?>
					</form>
				</div>
</div>