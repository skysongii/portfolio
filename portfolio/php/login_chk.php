<?
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
// $db_chk = 0, 1       // conn.php 내 db 체크 값 (0: 실패, 1: 성공)
$user_id    = $_POST["username"];
$user_pwd = $_POST["userpassword"];

$ROOT_PATH = "/dashboard/src/portfolio";

include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/php/conn.php";

if($db_chk == 1) {
    
} else { ?>
    <script>
        // alert("서버와의 통신 중 오류가 발생하였습니다.");
        // history.back();
    </script>
 <? }


// $select_query = "select id, password from sguser where id='$user_id' and password='$user_pwd'";
$select_query = "SELECT 
                    id, password 
                FROM 
                    sguser 
                WHERE 
                    id='$user_id' and password = HEX(AES_ENCRYPT('$user_pwd', SHA2('mmoa@Jjin010!',256)));";

$result_query = mysqli_query($conn, $select_query);

$row_num = mysqli_num_rows($result_query);
if($row_num == 0) {
    echo "<script>alert('아이디 혹은 비밀번호가 일치하지 않습니다.')</script>";
    echo "<script>history.back()</script>";
} else {
    echo 
}
// echo $row_num;
echo "<br>";

if ($row_num > 0) {
    session_start();
    $_SESSION['user_id'] = $user_id;
    $usr_id = $_SESSION['user_id'];
    echo "어서오세요. $usr_id 님";
} else {
    echo "<script>alert('아이디 혹은 비밀번호가 일치하지 않습니다.')</script>";
    echo "<script>history.back()</script>";
}
