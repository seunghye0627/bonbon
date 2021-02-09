<?php
	session_start();
	
	$mode = $_GET["mode"];
	$num = $_GET["num"];

	include "../lib/dbconn.php";
	
	$sql = "DELETE from message where num = $num";
	mysqli_query($conn, $sql);
	
	mysqli_close($conn);
	
	if($mode == "send") {
		$url = "message_box.php?mode=send";
	}
	else {
		$url = "message_box.php?mode=rv";
	}
	
	echo "
		<script>
			location.href = '$url';
		</script>
	";
?>