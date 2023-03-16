<?php
$ROOT_PATH = "/dashboard/gitDev/YS";

include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/connect.php";

$start_time = $_GET["start-time"];
$end_time   = $_GET["end-time"];
$gubun      = $_GET["classification"];
$content    = $_GET["details"];


if($gubun == "arrive") {
    $gubun = "출근";
}
else if ($gubun == "leave") {
    $gubun = "퇴근";
}
else if ($gubun == "work") {
    $gubun = "업무";
}
else if ($gubun == "non-work") {
    $gubun = "업무 외 행동";
}
else if ($gubun == "non-area") {
    $gubun = "자리비움";
};
//echo $start_time." ".$end_time." ".$gubun." ".$content;

$insert_query = "insert into YS_INFO values ('$start_time', '$end_time', '$gubun', '$content')";
$result_query = mysqli_query($conn, $insert_query);
?>
<html>
    <header>
        <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </header>
</html>
<script>
    $().ready(function () {
        $("#alertStart").click(function () {
            Swal.fire({
                icon: 'success',
                title: 'Alert가 실행되었습니다.',
                text: '이곳은 내용이 나타나는 곳입니다.',
            });
        });
    });
    // alert("업무일지가 등록되었습니다.");
    // history.back();
</script>

