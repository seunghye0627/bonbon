<?php
	$id = $_GET['id'];
	
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	
	$email = $email1. "@" .$email2;
	
	include "../lib/dbconn.php";
	
	$sql = "UPDATE user SET pass = '$pass', name = '$name', email = '$email' WHERE id = '$id'";
	mysqli_query($conn,$sql);
	mysqli_close($conn);
	
	echo "
		<script>
			location.href = '../index.php';
		</script>
	";
?>