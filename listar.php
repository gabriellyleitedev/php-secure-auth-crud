<?php
session_start();
if (!isset($_SESSION['logado'])) { header("Location: index.php"); exit(); }
include 'conexao.php';
include 'cabecalho.php';

$consulta = $pdo->query("SELECT * FROM amigos");
$amigos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <h2>Lista de Amigos da Gabi</h2>
   <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th class="text-center">Ações</th> </tr>
                </thead>
                <tbody>
                    <?php foreach ($amigos as $amigo): ?>
                    <tr>
                        <td class="fw-bold text-primary"><?php echo $amigo['nome']; ?></td>
                        <td><?php echo $amigo['telefone']; ?></td>
                        <td><?php echo $amigo['email']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-warning">Editar</button>
                            <button class="btn btn-sm btn-outline-danger">Excluir</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    <a href="principal.php" class="btn btn-primary">Voltar</a>
</div>

<?php include 'rodape.php'; ?>