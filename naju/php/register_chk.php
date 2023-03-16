<?php
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// $db_chk = 0, 1       // conn.php 내 db 체크 값 (0: 실패, 1: 성공)
$ROOT_PATH = "/dashboard/src/portfolio";
include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/php/conn.php";

$user_id    = $_POST["reg-userid"];
$user_pwd = $_POST["reg-userpwd"];
$user_pwd_confirm = $_POST["reg-userpwd-confirm"];
$user_name = $_POST["reg-username"];

echo "id: ".$user_id."<br>";
echo "pwd: ".$user_pwd."<br>";
echo "pwd-c: ".$user_pwd_confirm."<br>";
echo "name: ".$user_name;


if($db_chk == 1) {
    $select_query = "select id, password from sguser where id='$user_id'";
    $result_query = mysqli_query($conn, $select_query);
    echo $select_query;
    echo "<br>\n";

    $id_chk_cnt = mysqli_num_rows($result_query);
    echo $id_chk_cnt;
} else { ?>
    <script>
        alert("서버와의 통신 중 오류가 발생하였습니다.");
        history.back();
    </script>
 <?php }

