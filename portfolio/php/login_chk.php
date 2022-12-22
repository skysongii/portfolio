<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// $db_chk = 0, 1       // conn.php 내 db 체크 값 (0: 실패, 1: 성공)
$user_id    = $_POST["username"];
$user_pwd = $_POST["userpassword"];

echo $user_id."\n<br>";
echo $user_pwd;
$ROOT_PATH = "/dashboard/src/portfolio";
include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/php/conn.php";

if($db_chk == 1) {

} else { ?>
    <script>
        alert("서버와의 통신 중 오류가 발생하였습니다.");
        history.back();
    </script>
 <?php } ?>
    
