<?php
	session_start();
?>

<script src="./js/jquery-3.1.1.min.js"></script> 
<script src="./js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="./css/bootstrap.min.css"> 
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">


<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>쪽지</title>
		
		<link rel = "stylesheet" href = "../css/common.css">
		<link rel = "stylesheet" href = "../css/message.css">
	</head>
	
	<body>
		<header>
			<?php include "../lib/header2.php" ?>
		</header>
		
		<section>
			<div id = "main_content">
				<div id="message_box">
					<h3 id="write_title">쪽지 보내기</h3>
	 
					<!-- 쪽지함 이동 버튼 영역 -->
					<ul class="top_buttons">
						<li><a href="./message_box.php?mode=rv">수신 쪽지함</a></li>
						<li><a href="./message_box.php?mode=send">송신 쪽지함</a></li>
					</ul>
	 
					<!-- message_insert.php를 통해 DB의 message테이블에 저장 : 송신id는 get방식으로 -->
				   <form action="./message_insert.php?send_id=<?=$userid?>" method="post" name="message_form">
						<div id="write_msg">
							<ul>
								<li>
									<span class="col1">보내는 사람 : </span>
									<span class="col2"><?=$userid?></span>
								</li>
								<li>
									<span class="col1">수신 아이디 : </span>
									<span class="col2"><input type="text" name="rv_id"></span>
								</li>
								<li>
									<span class="col1">제목 : </span>
									<span class="col2"><input type="text" name="subject"></span>
								</li>
								<li id="textarea">
									<span class="col1">내용 : </span>
									<span class="col2"><textarea name="content"></textarea></span>
								</li>                                
							</ul>
							<!-- 서밋버튼 -->
							<input type="submit" class="btn btn-primary" value="보내기">
						</div>
					</form>
				</div>
            </div>
		</section>
		
		<footer>
			<?php include "../lib/footer.php" ?>
		</footer>
		
	</body>
</html>