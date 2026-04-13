<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda8ds";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>