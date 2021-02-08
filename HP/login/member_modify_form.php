<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>정보수정</title>
		
		<link rel = "stylesheet" href = "../css/common.css">
		<link rel = "stylesheet" href = "../css/member.css">
		
		<script>
			function submitForm() {
				// 비밀번호 비어 있는가?
				if(!document.member_form.pass.value){
					alert("비밀번호를 입력하세요.");
					document.member_form.pass.focus();
					return;
				}
				 // 비밀번호 확인 비어 있는가?
				 if(!document.member_form.pass_confirm.value){
					alert("비밀번호 확인을 입력하세요.");
					document.member_form.pass_confirm.focus();
					return;
				}
				 // 이름 비어 있는가?
				 if(!document.member_form.name.value){
					alert("이름을 입력하세요.");
					document.member_form.name.focus();
					return;
				}
				// 비밀번호와 비밀번호 확인 칸의 입력값이 같은지 비교
				if(document.member_form.pass.value != document.member_form.pass_confirm.value){
					alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
					document.member_form.pass.focus();
					// 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
					document.member_form.pass.select();
					return;
				}
				// form요소를 직접 submit하는 메소드
				document.member_form.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
				
			}
	 
			// 초기화 버튼 이미지 클릭시
			function resetForm() {
				document.member_form.id.value = "";
				document.member_form.pass.value = "";
				document.member_form.pass_confirm.value = "";
				document.member_form.name.value = "";
				document.member_form.email1.value = "";
				document.member_form.email2.value = "";
	 
				// 첫번째 입력 요소로 이동
				document.member_form.id.focus();
			}
		</script>
	</head>
	
	<body>
		<header>
			<?php include "../lib/header2.php" ?>
		</header>
		
		<?php
			include "../lib/dbconn.php";
			
			$sql = "SELECT * FROM user WHERE id = '$userid'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$pass = $row['pass'];
			$email = explode("@",$row['email']);
			$email1 = $email[0];
			$email2 = $email[1];
			
			mysqli_close($conn);
		?>
		
		<section>
			<div id = "main_content">
				<div id = "join_box">
					<form action="./member_modify.php?id=<?=$userid?>" method="post" name="member_form">
						<h2>정보수정</h2>
						
						<div class = "form_id">
							<div class="col1">아이디</div>
                        <div class="col2"> <?= $userid ?> </div>
						</div>
						<div class="clear"></div>
						<div class="form">
							<div class="col1">비밀번호</div>
							<div class="col2"><input type="password" name="pass" value="<?=$pass?>"></div>
						</div>
						<div class="clear"></div>
						<div class="form">
							<div class="col1">비밀번호 확인</div>
							<div class="col2"><input type="password" name="pass_confirm" value="<?=$pass?>"></div>
						</div>
						<div class="clear"></div>
						<div class="form">
							<div class="col1">이름</div>
							<div class="col2"><input type="text" name="name" value="<?=$username?>"></div>
						</div>
						<div class="clear"></div>
						<div class="form email">
							<div class="col1">이메일</div>
							<div class="col2">
								<input type="text" name="email1" value="<?=$email1?>">@<input type="text" name="email2" value="<?=$email2?>">
							</div>
						</div>
						<div class="clear"></div>
						<!-- input요소의 submit, reset으로 만들면 이미지로 못 만듬 -->
						<!-- input요소의 타입 중 image 타입으로 하면 이미지 버튼이면서 submit 기능 -->
						<!-- 값을 전송할 때 값이 비어있는지 검증하는 작업도 하고 싶어서.. -->
						<!-- Javascript를 이용해서 submit()해보기 -->
						<div class="bottom_line"></div>
						<div class="buttons">
							<img src="../img/button_save.gif" style="cursor:pointer" onclick="submitForm()">&nbsp;
							<img src="../img/button_reset.gif" style="cursor:pointer" onclick="resetForm()">
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