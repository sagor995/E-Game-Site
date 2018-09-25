<?php
	<h1 id="profile_heading">Update User's Profile</h1>

				<div id="UserImage"></div>

				<div id="details">
					<form id="details_input" action="" method="post">
						<div class="row">
							<label for="username" class="labels" value="<?php echo $username;?>">Username:</label>
							<input type="text" name="username" id="username" class="input_field_update">
						</div>

						<div class="row">
							<label for="password" class="labels" >Password:</label>
							<input type="text" name="password" id="password" class="input_field_update">
						</div>

						<div class="row">
							<label for="country" class="labels">Country:</label>
							<input type="text" name="country" id="country" class="input_field_update">
						</div>

						<div class="row">
							<label for="city" class="labels">City:</label>
							<input type="text" name="city" id="city" class="input_field_update">
						</div>

						<div class="row">
							<label for="email" class="labels">Email:</label>
							<input type="text" name="email" id="email" class="input_field_update">
						</div>

						<div class="row">
							<label for="contact" class="labels">Contact No.:</label>
							<input type="text" name="contact" id="contact" class="input_field_update">
						</div>

						<input type="submit" name="update_submit" value="Update" class="buttons">
					</form>

					<?php
						if(isset($_POST['update_submit'])){
							$con = mysqli_connect("localhost","root","","e_game_site");
							
							$username = $_POST['username'];
							$password = $_POST['password'];
							$country = $_POST['country'];
							$city = $_POST['city'];
							$email = $_POST['email'];
							$contact = $_POST['contact'];

							if($username != null){
								$query = "UPDATE customer SET customer_name= '$username' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
							if($password != null){
								$query = "UPDATE customer SET customer_pass='$password' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
							if($country != null){
								$query = "UPDATE customer SET customer_country='$country' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
							if($city != null){
								$query = "UPDATE customer SET customer_city='$city' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
							if($email != null){
								$query = "UPDATE customer SET customer_email='$email' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
							if($contact != null){
								$query = "UPDATE customer SET customer_contact='$contact' WHERE customer_id=2";
								$result=mysqli_query($con,$query);
							}
						}
					?>
				</div>


?>