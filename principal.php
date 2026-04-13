<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit();
}
include 'cabecalho.php'; 
?>

<div class="container mt-5">
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm border">
        <div class="container-fluid py-2">
            <h1 class="display-5 fw-bold text-primary">Bem-vinda Gabi!</h1>
            <p class="col-md-8 fs-4 text-muted">Logado como: <strong><?php echo $_SESSION['usuario']; ?></strong></p>
            <hr class="my-4">
            <p>Gerencie seus contatos e informações através do painel abaixo.</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-primary">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <span style="font-size: 3rem;">👤➕</span>
                    </div>
                    <h5 class="card-title">Novo Cadastro</h5>
                    <p class="card-text text-muted">Adicione novos amigos na sua base de dados rapidamente.</p>
                    <a href="form_cad.php" class="btn btn-primary w-100">Cadastrar Amigo</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-secondary">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <span style="font-size: 3rem;">📋</span>
                    </div>
                    <h5 class="card-title">Visualizar Lista</h5>
                    <p class="card-text text-muted">Consulte, edite ou remova amigos já cadastrados no sistema.</p>
                    <a href="listar.php" class="btn btn-secondary w-100">Ver Listagem</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 text-center">
        <a href="logout.php" class="text-danger text-decoration-none fw-bold">
            <i class="bi bi-box-arrow-right"></i> Encerrar Sessão (Logout)
        </a>
    </div>
</div>

<?php include 'rodape.php'; ?>