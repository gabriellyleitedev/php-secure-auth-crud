<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
    $sql->execute([$usuario, $senha]);

    if ($sql->rowCount() > 0) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header("Location: principal.php");
    } else {
        echo "<script>alert('Login ou senha incorretos!'); window.location='index.php';</script>";
    }
}
?>