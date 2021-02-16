<?php
	session_start();
    if(isset($_SESSION['userid'])) $userid = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>게시글 보기</title>

    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/boardView.css">
</head>

<body>
    <header>
        <?php include "../lib/header2.php" ?>
    </header>

    <section>
        <div id="main_content">
            <div id="viewPost">
                <h3> 게시글 보기</h3>
                <?php
						$boardID = $_GET['boardID'];
						
                        include "../lib/dbconn.php";
                        if(isset($_GET['hit'])){
                            $hit = $_GET['hit'];
                            $sql = "UPDATE board SET boardHit = '$hit' WHERE boardID = $boardID";
                            mysqli_query($conn, $sql);
                        }
						
						$sql = "SELECT * FROM board WHERE boardID = $boardID";
						$result = mysqli_query($conn,$sql);

						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						$title= $row['title'];
						$content= $row['boardContent'];
						$writerID = $row['userID'];
						$datetime = $row['boardDatetime'];
						
						$content = str_replace("\n", "</br>", $content);
						$content = str_replace(" ","&nbsp", $content);
						
					?>

                <ul id="viewContent">
                    <li>
                        <span class="col1"><strong>제목: </strong><?=$title?></span>
                        <span class="col2">
                            <strong><?=$writerID?></strong> | <?=$datetime?> |
                            <button onclick="javascript:editPost(1)">수정</button>
                            <button onclick="javascript:editPost(2)">삭제</button>
                        </span>

                    </li>

                    <li>
                        <?=$content?>
                    </li>
                </ul>

                <script>
                    //본인 글만 수정/삭제 가능
                    var userID = '<?=$userid?>';
                    var writerID = '<?=$writerID?>';

                    function editPost(i) {

                        if (userID == writerID) {

                            switch (i) {

                                case 1:
                                    location.href = './boardForm.php?mode=1&boardID=<?=$boardID?>';
                                    break;
                                case 2:
                                    location.href = './boardForm.php?mode=2&boardID=<?=$boardID?>';
                                    break;

                            }

                        } else {

                            alert('본인 글만 가능합니다!');
                        }
                    }

                </script>

                <div id="boardComment">

                    <?php include './boardComment.php'?>

                </div>
            </div>

        </div>
    </section>
    <footer>
        <?php include "../lib/footer.php"; ?>
    </footer>
</body>

</html>
