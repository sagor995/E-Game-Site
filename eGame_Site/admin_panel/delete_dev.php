<?php
session_start();

	include 'includes/db.php';	
	if (!isset($_SESSION['user_email'])) {
	echo "<script>window.open('login.php?not_admin=Your are not an Admin!','_self')</script>";
}else{				
						
	if (isset($_GET['delete_dev'])) {
		$delete_id=$_GET['delete_dev'];


		$delete_dev=$con->query("delete from developers where developer_id='$delete_id'");

		if ($delete_dev) {
			echo "<script>alert('Developer has been Deleted!')</script>";
				 	echo "<script>window.open('index.php?view_dev','_self')</script>";
		}

	}

}


?>