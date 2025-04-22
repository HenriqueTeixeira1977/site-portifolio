<?php
include('conexao.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conexao->prepare("SELECT * FROM contatos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $contato = $resultado->fetch_assoc();
    } else {
        die("Contato não encontrado.");
    }

    $stmt->close();
} else {
    die("ID inválido ou não informado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Visualizar Contato</h2>
    <table class="table table-bordered mt-3">
        <tr><th>Nome</th><td><?= htmlspecialchars($contato['nome']) ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($contato['email']) ?></td></tr>
        <tr><th>WhatsApp</th><td><?= htmlspecialchars($contato['whatsapp']) ?></td></tr>
        <tr><th>Tipo de Site</th><td><?= htmlspecialchars($contato['tipo_site']) ?></td></tr>
        <tr><th>Mensagem</th><td><?= nl2br(htmlspecialchars($contato['mensagem'])) ?></td></tr>
        <tr><th>Data/Hora</th><td><?= date('d/m/Y H:i', strtotime($contato['data_envio'])) ?></td></tr>
    </table>
    <a href="dashboard.php" class="btn btn-secondary">Voltar</a>
</div>
</body>
</html>

