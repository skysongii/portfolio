<?php
$ROOT_PATH = "/dashboard/gitDev/YS";

include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/conn.php";

if($db_chk == 1) {
//    echo "<script>alert(1);</script>";

} else { ?>
    <script>
        // alert("서버와의 통신 중 오류가 발생하였습니다.");
        // history.back();
    </script>
 <? }
?>