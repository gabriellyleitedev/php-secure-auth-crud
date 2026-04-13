<?php
session_start();
if (!isset($_SESSION['logado'])) { header("Location: index.php"); exit(); }
include 'cabecalho.php';
?>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white"><h3>Novo Cadastro (Protótipo)</h3></div>
        <div class="card-body">
            <div class="alert alert-info">🚧 Essa funcionalidade esta sendo integrada ao banco de dados.</div>
            <form>
                <input type="text" class="form-control mb-2" placeholder="Nome do Amigo" disabled>
                <input type="text" class="form-control mb-2" placeholder="Telefone" disabled>
                <button type="button" class="btn btn-secondary">Salvar (Em breve)</button>
                <a href="principal.php" class="btn btn-link">Voltar</a>
            </form>
        </div>
    </div>
</div>