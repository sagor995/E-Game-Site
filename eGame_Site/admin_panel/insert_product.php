<!DOCTYPE>

<?php


 include("includes\db.php"); 
if (!isset($_SESSION['user_email'])) {
	echo "<script>window.open('login.php?not_admin=Your are not an Admin!','_self')</script>";
}else{

?>

<html>
<head>
	<title>Admin: Insert Post</title>


</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		
		<table align="center" width="795px" bgcolor="#228B22" border="5">
			<tr align="center">
				<td colspan="7"><h2>Insert New Post</h2></td>
			</tr>	
			<tr>
				<td align="right"><b>Product Title</b></td>
				<td><input type="text" name="product_title" size="60" required></td>
			</tr>


			<tr>
				<td align="right"><b>Product Category</b></td>
				<td>
					<select name="product_cat" required>
						
							<option>Select a Category</option>
							<?php

									$run_categories = $con->query("select * from categories");

									while($row_categories=mysqli_fetch_assoc($run_categories)){
											$category_id = $row_categories['category_id'];
											$category_title = $row_categories['category_title'];

											echo "<option value='$category_id'>$category_title</option>";

										}

							?>	


					</select>
				</td>
			</tr>


			<tr>
				<td align="right"><b>Product Developer</b></td>
				<td>

					<select name="product_developers" required>
						
							<option>Select Game Developers</option>
							<?php

									$run_developers = $con->query("select * from developers");

											while($row_developers=mysqli_fetch_assoc($run_developers)){
													$developer_id = $row_developers['developer_id'];
													$developer_title = $row_developers['developer_title'];

													echo "<option value='$developer_id'>$developer_title</option>";

											}

							?>	


					</select>	

				</td>
			</tr>


			<tr>
				<td align="right"><b>Product Image</b></td>
				<td><input type="file" name="product_image" required/></td>
			</tr>


			<tr>
				<td align="right"><b>Product Price</b></td>
				<td><input type="text" name="product_price" required/></td>
			</tr>


			<tr>
				<td align="right"><b>Product Description</b></td>
				<td><textarea name="product_des" cols="30" rows="10"></textarea></td>
			</tr>


			<tr>
				<td align="right"><b>Product Keywords</b></td>
				<td><input type="text" name="product_keyword" size="50" required/></td>
			</tr>


			<tr align="center" >
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Post"></td>
			</tr>
			
		</table>

	</form>


</body>
</html>


<?php
	
	if (isset($_POST['insert_post'])) {


		//Getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_developers = $_POST['product_developers'];
		$product_price = $_POST['product_price'];
		$product_des= $_POST['product_des'];
		$product_keyword= $_POST['product_keyword'];

		//Getting the text data from the fields
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];

		move_uploaded_file($product_image_tmp, "product_images/$product_image");

		$result=$con->query("insert into products(product_cat,product_developers,product_title,product_price,product_des,product_image,product_keyword) 
			values('$product_cat','$product_developers','$product_title','$product_price','$product_des','$product_image','$product_keyword')");

		if ($result) {
				 	echo "<script>alert('Post has been created!')</script>";
				 	echo "<script>window.open('index.php','_self')</script>";
				 }
	}







?>

<?php
}
?>