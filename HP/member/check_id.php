<meta charset = "UTF-8">

<?php
	$id = $_GET['id'];
	
	if(!$id) {
		echo "아이디를 입력하세요";
		exit;
	}
	else {
		include "../lib/dbconn.php";
	
		$sql = "SELECT * FROM user WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
		$rowNum = mysqli_num_rows($result);
	
		if($rowNum) {
			echo "아이디가 중복 됩니다.<br>";
			echo "다른 아이디를 사용하세요.<br>";
		}
		else {
			echo "사용가능한 아이디 입니다.<br>";
		}
		
		mysqli_close($conn);
	}
?>