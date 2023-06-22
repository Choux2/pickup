<?php
    session_start();
    $con = mysqli_connect("localhost", "dulfla0307", "yerim486486!", "dulfla0307");
    mysqli_query($con,'SET NAMES utf8');
    $id = $_SESSION['user_id'];

    $sql = "DELETE FROM member WHERE id='$id'";
    $res = mysqli_query($con, $sql);

    /* 세션 삭제 */
    unset($_SESSION["user_id"]);
    unset($_SESSION["UserName"]);
    session_destroy();

    if($res){
        echo "<script>alert('탈퇴완료!');";
        echo "window.location.href='member_del_ok.php';</script>";
    }
?>