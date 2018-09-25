
<table width="795" align="center" bgcolor="orange" >
		<tr align="center" style="color: black;">
			<td colspan="6"><h2>View All Orders</h2></td>
		</tr>
		<tr align="center" style="color: red;">
			<td>Card No</td>
			<td>Name</td>
			<td>Address</td>
			<td>Product Quantity</td>
			<td>Total Price</td>
			<td>Order Date</td>
			<td>Status</td>
		</tr>
		
		<?php
			include 'includes/db.php';
			$run_c=$con->query("SELECT * FROM mastercard ");

			$i=0;
			while ($row=mysqli_fetch_array($run_c)) {
					$id=$row['id'];
					$c_num=$row['card_num'];
					$c_name=$row['card_name'];
					$c_address=$row['card_address'];
					$c_quantity=$row['product_quantity'];
					$c_price=$row['total_price'];
					$c_date=$row['date'];
					$c_status=$row['status'];
					$i++;
				
		?>

		<tr align="center">
			<td><?php echo $c_num; ?></td>
			<td><?php echo $c_name; ?></td>
			<td><?php echo $c_address; ?></td>
			<td><?php echo $c_quantity; ?></td>
			<td><?php echo $c_price; ?></td>
			<td><?php echo $c_date; ?></td>
			<td><?php echo $c_status; ?></td>
		</tr>

		<?php
			}
		?>




</table>


