<?php

error_reporting(E_ALL);

ini_set("display_errors", 1);


	$userID = $_POST['userID'];
	$content = $_POST['content'];
    $boardID = $_POST['boardID'];
	$datetime = date("Y-m-d");

    include "../lib/dbconn.php";



    if($content != null) {

        $sql = "INSERT INTO boardcomment(commentContent, commentDatetime, boardID, userID) VALUES('$content','$datetime','$boardID','$userID');";

        mysqli_query($conn,$sql);
        mysqli_close($conn);

        echo ("<script>
                    location.href='boardView.php?boardID=".$boardID."';
            </script>");

    }else {
    echo("
        <script>
            alert('내용을 입력하세오.');
            history.back();
        </script>
        ");
    exit;
    }

?>
