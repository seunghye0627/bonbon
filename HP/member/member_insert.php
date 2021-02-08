<?php
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$email1 = $_POST['email1'];
	$email2 = $_POST['email2'];
	
	$email = $email1 . "@" . $email2;
	
	$regist_day = date("Y-m-d H:i");
	
	// 레벨은 신규회원은 9등급,포인트는 0점으로 기본설정
	// 관리자는 1등급
	
	include "../lib/dbconn.php";
	
	$sql = "SELECT * FROM user WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	$rowNum = mysqli_num_rows($result);
	
	if($rowNum) {
		echo("
			<script>
				alert('해당 아이디가 존재합니다.');
				history.back();
			</script>
		");
		exit;
	}
	else {
		//회원정보 insert
		$sql = "INSERT INTO user(id, pass, name, email, regist_day, level, point) VALUES('$id','$pass','$name','$email','$regist_day','9','0')";
		
		mysqli_query($conn,$sql);
		mysqli_close($conn);
		
		echo ("
			<script>
				location.href = '../index.php';
			</script>
		");
	}
	//배고프다 배고파 점심을 먹어도 왜 또 배가 고플까 배고프다 배고파 돼지같다
?>