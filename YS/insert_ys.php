<?php
$ROOT_PATH = "/dashboard/gitDev/YS";

include_once $_SERVER["DOCUMENT_ROOT"] .$ROOT_PATH. "/connect.php";

$start_time = $_GET["start-time"];
$end_time   = $_GET["end-time"];
$gubun      = $_GET["classification"];
$content    = $_GET["details"];
$result_chk = 0;

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
$result_chk = 1;

echo $result_chk;
?>

