
<?php
if (!isset($_SESSION['user_email'])) {
	echo "<script>window.open('login.php?not_admin=Your are not an Admin!','_self')</script>";
}else{

?>

<table width="795" align="center" bgcolor="#1E90FF" >
		<tr align="center">
			<td colspan="6"><h2>View All Developer Here</h2></td>
		</tr>
		<tr align="center">
			<td>Developer Id</td>
			<td>Developer Title</td>
			<td>Edit</td>
			<td>Delete</td>

		</tr>
		<?php
			include 'includes/db.php';
			$run_dev=$con->query("select * from developers");

			$i=0;
			while ($row=mysqli_fetch_array($run_dev)) {
					$dev_title=$row['developer_title'];
					$dev_id=$row['developer_id'];
					$i++;
				
		?>

		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $dev_title; ?></td>
			<td><a href="index.php?edit_dev=<?php echo $dev_id; ?>">Edit</a></td>
			<td><a href="delete_dev.php?delete_dev=<?php echo $dev_id; ?>">Delete</a></td>

		</tr>

		<?php
			}
		?>




</table>

<?php
}

?>