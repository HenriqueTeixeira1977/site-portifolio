<?php
include('../../includes/conexao.php');

// Verifica se o ID foi passado
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID inválido ou não informado.");
}

$id = intval($_GET['id']); // Sanitiza

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $tipo = $_POST['tipo_site'];
    $mensagem = $_POST['mensagem'];

    $stmt = $conexao->prepare("UPDATE contatos SET nome=?, email=?, whatsapp=?, tipo_site=?, mensagem=? WHERE id=?");
    $stmt->bind_param("sssssi", $nome, $email, $whatsapp, $tipo, $mensagem, $id);

    if ($stmt->execute()) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . $conexao->error;
    }
    $stmt->close();
} else {
    $stmt = $conexao->prepare("SELECT * FROM contatos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 0) {
        die("Contato não encontrado.");
    }

    $contato = $resultado->fetch_assoc();
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .zoom-in {
            animation: zoomIn 0.6s ease forwards;
            opacity: 0;
            transform: scale(0.9);
        }

        @keyframes zoomIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
<div class="container mt-5 d-flex justify-content-center">
    <div class="col-md-8 zoom-in">
        <h2 class="text-center mb-4">Editar Contato</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($contato['nome']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($contato['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">WhatsApp</label>
                <input type="text" name="whatsapp" class="form-control" value="<?= htmlspecialchars($contato['whatsapp']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Site</label>
                <input type="text" name="tipo_site" class="form-control" value="<?= htmlspecialchars($contato['tipo_site']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mensagem</label>
                <textarea name="mensagem" class="form-control" rows="4" required><?= htmlspecialchars($contato['mensagem']) ?></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
