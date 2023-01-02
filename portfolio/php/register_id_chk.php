<?php
    // 회원가입시 아이디 중복체크 api
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// $db_chk = 0, 1       // conn.php 내 db 체크 값 (0: 실패, 1: 성공)
$ROOT_PATH = "/dashboard/src/portfolio";
include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/php/conn.php";

$user_id    = $_POST["id"];
// echo "id: ".$user_id."<br>";


if($db_chk == 1) {
    $select_query = "select id, password from sguser where id='$user_id'";
    $result_query = mysqli_query($conn, $select_query);
    $id_chk = mysqli_num_rows($result_query);
    
    if($id_chk == 1) {
        // 아이디 존재
        echo 0;
        
    } else {
        // 아이디 사용 가능
        echo 1;
    }
} else {
    echo "<script> alert('서버와 연결이 실패하여 메인 페이지로 돌아갑니다.')</script>";
    echo "<script>locaion.href='http://localhost/dashboard/src/portfolio/sangsahwa/sgindex.html'";
}

