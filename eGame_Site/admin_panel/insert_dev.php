<?php
if (!isset($_SESSION['user_email'])) {
	echo "<script>window.open('login.php?not_admin=Your are not an Admin!','_self')</script>";
}else{
?>


<form action="" method="post" style="margin-top: 300px;">
<b>Insert New Developers:</b>
<input type="text" name="new_dev" required><br><br>
<input type="submit" name="add_dev" value="Add Developer"/>
</form>

<?php
	include 'includes/db.php';
	if (isset($_POST['add_dev'])) {
	$new_dev=$_POST['new_dev'];

	$insert_dev=$con->query("insert into developers(developer_title) values('$new_dev')");
	if ($insert_dev) {

				 	echo "<script>alert('New Developer Inserted!')</script>";
				 	echo "<script>window.open('index.php?view_dev','_self')</script>";
				 }
	}



?>

<?php
}

?>