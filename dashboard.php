<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Lista de Contatos</h2>

    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>WhatsApp</th>
                <th>Tipo de Site</th>
                <th>Mensagem</th>
                <th>Data/Hora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>


        <?php
        $sql = "SELECT * FROM contatos ORDER BY data_envio DESC";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$linha['id']}</td>
                        <td>{$linha['nome']}</td>
                        <td>{$linha['email']}</td>
                        <td>{$linha['whatsapp']}</td>
                        <td>{$linha['tipo_site']}</td>
                        <td>" . substr($linha['mensagem'], 0, 30) . "...</td>
                        <td>" . date('d/m/Y H:i', strtotime($linha['data_envio'])) . "</td>
                        <td>
                            <a href='visualizar.php?id={$linha['id']}' class='btn btn-sm btn-info'>Visualizar</a>
                            <a href='editar.php?id={$linha['id']}' class='btn btn-sm btn-warning'>Editar</a>
                            <a href='excluir.php?id={$linha['id']}' class='btn btn-sm btn-danger' onclick=\"return confirm('Tem certeza que deseja excluir?')\">Excluir</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8' class='text-center'>Nenhum contato encontrado.</td></tr>";
        }

        $conexao->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
