<?php
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	
	if(!$id) {
		echo "
			<script>
				alert('아이디를 입력하세요.');
				history.back();
			</script>
		";
		exit;
	}
	
	if(!$pass) {
		echo ("
			<script>
				alert('비밀번호를 입력하세요.');
				history.back();
			</script>
		");
		exit;
	}
	
	include "../lib/dbconn.php";
	
	$sql= "SELECT * FROM user WHERE id='$id' and pass='$pass'";
    $result= mysqli_query($conn,$sql);
	$rowNum = mysqli_num_rows($result);
	
	if(!$rowNum) {
		echo ("
			<script>
				alert('아이디와 비밀번호를 확인하세요.');
				history.back();
			</script>
		
		");
		exit;
	}
	else {
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
		session_start();
		$_SESSION['userid'] = $row['id'];
		$_SESSION['username'] = $row['name'];
		$_SESSION['userlevel'] = $row['level'];
		$_SESSION['userpoint'] = $row['point'];
		
		echo ("
			<script>
				location.href = '../index.php';
			</script>
		");
	}	
?>