<?php
	include 'includes/db.php';

	if (!isset($_SESSION['user_email'])) {
	echo "<script>window.open('login.php?not_admin=Your are not an Admin!','_self')</script>";
}else{

	$dev_id=$_GET['edit_dev'];

	$get_dev=$con->query("select * from developers where developer_id='$dev_id'");
	$row_dev=mysqli_fetch_array($get_dev);
	$dev_id=$row_dev['developer_id'];
	$dev_title=$row_dev['developer_title'];
?>


<form action="" method="post" style="margin-top: 300px;">
<b>Update Developer:</b>
<input type="text" name="new_dev" value="<?php echo $dev_title; ?>"><br><br>
<input type="submit" name="update_dev" value="Update Developer"/>
</form>

<?php
		
	if (isset($_POST['update_dev'])) {
		$update_id=$dev_id;
	$new_dev=$_POST['new_dev'];

	$update_dev=$con->query("update developers set developer_title='$new_dev' where developer_id='$update_id'");
	if ($update_dev) {

				 	echo "<script>alert('Developer Updated!')</script>";
				 	echo "<script>window.open('index.php?view_dev','_self')</script>";
				 }
	}


}
?>