<?php
$server     = "localhost";
$user       = "sunho";
$password   = "mmoa@Jjin010!";
$dbname = "mysql";

$db_chk = 0;

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error)
    echo "<h1>접속실패</h1>";
else
    $db_chk = 1;
