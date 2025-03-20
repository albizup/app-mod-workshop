<?php
// Configurazione del database

$db_host = $_ENV['db_host'];
$db_name = $_ENV['db_name'];
$db_user = $_ENV['db_user'];
$db_pass = $_ENV['db_pass'];

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
