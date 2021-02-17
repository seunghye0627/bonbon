<?php
	$send_id = $_GET['send_id'];
	
	$rv_id = $_POST['rv_id']; //수신자 아이디
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	
	$regist_day = date("Y-m-d H:i"); // 쪽지 보낸 시간
	
	include "../lib/dbconn.php";
	
	$sql = "SELECT * FROM user WHERE id = '$rv_id'";
	$result = mysqli_query($conn,$sql);
	$numNum = mysqli_num_rows($result);
	
	if($numNum) {
		$sql= "INSERT INTO message(send_id, rv_id, subject, content, regist_day)";
        $sql.="VALUES('$send_id','$rv_id','$subject','$content','$regist_day')";
        mysqli_query($conn, $sql);
    }else{
        echo "
            <script>
                alert('수신 아이디가 잘못되었습니다.');
                history.back();
            </script>
        ";
        exit;
    }
	
	mysqli_close($conn);
	
	echo "
		<script>
			alert('쪽지 송신 완료');
			location.href = './message_form.php';
		</script>
	";
?>
