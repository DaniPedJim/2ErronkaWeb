<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$erabizena   = "root";
$pasahitza   = "1MG32025";
$datubase   = "erronka2";
$port       = 3306; 

$conn = new mysqli($servername, $erabizena, $pasahitza, $datubase, $port);

if ($conn->connect_error) {
    die("Errorea konexioan: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

if (!isset($_SESSION['izena'])) {
    $_SESSION['izena'] = '';
}
