<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['name'] = $_POST['name'] ?? '';
    header('location: ../bedanktpagina.php');
    exit;
}
?>
