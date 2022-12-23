<?php
$server     = "localhost";
$user       = "sunho";
$password   = "mmoa@Jjin010!";
$dbname = "portfolio";

$db_chk = 0;

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    echo "<h1>접속실패</h1>";
    echo "<script>locaion.href='http://sunho-sangsahwa.kro.kr/dashboard/src/portfolio/sangsahwa/login.html'</script>";
}
else
    $db_chk = 1;

