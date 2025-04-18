<?php
// Configurações do banco de dados
$host = "localhost";
$dbname = "portfolio";
$user = "root";
$pass = ""; // Altere para a senha do seu MySQL, se houver

// Conectar ao banco
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Receber dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$whatsapp = $_POST['whatsapp'] ?? '';
$tipo_site = $_POST['tipo_site'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Validar se está tudo preenchido
if ($nome && $email && $mensagem) {

    // Inserir no banco
    $sql = "INSERT INTO contatos (nome, email, whatsapp, tipo_site, mensagem) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $whatsapp, $tipo_site, $mensagem]);
    

    // Enviar e-mail (altere para seu e-mail real)
    //$to = "henriqueteixeira.wd@gmail.com";
    //$subject = "Nova mensagem de contato - Portfólio";
    //$body = "Nome: $nome\nE-mail: $email\nWhatsApp: $whatsapp\nTipo de Site: $tipo_site\n\nMensagem:\n$mensagem";
    //$headers = "From: henriqueteixeirao.md@gmail.com\r\nReply-To: $email";

    //mail($to, $subject, $body, $headers);

    // Redireciona ou exibe mensagem de sucesso
    //echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.html';</script>";

} //else {
    //echo "<script>alert('Por favor, preencha todos os campos obrigatórios.'); history.back();</script>";
//}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem Enviada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .card {
            max-width: 600px;
            width: 100%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="card text-center" data-aos="zoom-in">
        <div class="card-header bg-success text-white">
            Obrigado pelo contato!
        </div>
        <div class="card-body">
            <h1 class="card-title text-success">Mensagem enviada com sucesso!</h1>
            <p class="card-text fs-5">Logo entraremos em contato para alinhar os detalhes do seu projeto.</p>
            <a href="index.php" class="btn btn-primary mt-3">Voltar à Página Inicial</a>
        </div>
        <div class="card-footer text-muted">
            <?= date("d/m/Y H:i") ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>