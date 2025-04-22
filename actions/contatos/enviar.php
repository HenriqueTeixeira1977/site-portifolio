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

    // Enviar e-mail (desativado, mas mantido para referência)
    /*
    $to = "henriqueteixeira.wd@gmail.com";
    $subject = "Nova mensagem de contato - Portfólio";
    $body = "Nome: $nome\nE-mail: $email\nWhatsApp: $whatsapp\nTipo de Site: $tipo_site\n\nMensagem:\n$mensagem";
    $headers = "From: henriqueteixeirao.md@gmail.com\r\nReply-To: $email";
    mail($to, $subject, $body, $headers);
    */
} else {
    echo "<script>alert('Por favor, preencha todos os campos obrigatórios.'); history.back();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem Enviada com Sucesso!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #ffffff;
            --text-color: #212529;
            --card-bg: #f8f9fa;
            --gold-accent: #d4af37;
            --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        [data-theme="dark"] {
            --primary-bg: #1a1a1a;
            --text-color: #e9ecef;
            --card-bg: #2c2c2c;
            --gold-accent: #e6c200;
            --card-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-color);
            transition: all 0.3s ease;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .card {
            background-color: var(--card-bg);
            box-shadow: var(--card-shadow);
            border: none;
            border-radius: 15px;
            max-width: 700px;
            width: 100%;
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, var(--gold-accent), #b8860b);
            color: #fff;
            font-weight: 700;
            text-align: center;
            padding: 20px;
            border-bottom: none;
        }

        .card-body {
            padding: 30px;
            text-align: center;
        }

        .card-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--gold-accent);
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: var(--gold-accent);
            border-color: var(--gold-accent);
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #b8860b;
            border-color: #b8860b;
            transform: translateY(-2px);
        }

        .card-footer {
            background-color: var(--card-bg);
            color: var(--text-color);
            font-size: 0.9rem;
            padding: 15px;
            text-align: center;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-color);
        }

        @media (max-width: 576px) {
            .card-title {
                font-size: 1.5rem;
            }

            .card-text {
                font-size: 1rem;
            }

            .card-body {
                padding: 20px;
            }

            .btn-primary {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <button class="theme-toggle" onclick="toggleTheme()">
        <i class="bi bi-moon-stars-fill"></i>
    </button>

    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card-header">
            Mensagem Enviada com Sucesso!
        </div>
        <div class="card-body">
            <h1 class="card-title">Obrigado, <?= htmlspecialchars($nome) ?>!</h1>
            <p class="card-text">
                Sua mensagem foi recebida, e estamos entusiasmados para transformar suas ideias em realidade! Nos próximos 24 horas, nossa equipe entrará em contato para discutir os detalhes do seu projeto e criar algo extraordinário juntos.
            </p>
            <p class="card-text">
                <strong>Quer acelerar o processo?</strong> Entre em contato diretamente pelo WhatsApp ou explore nosso portfólio para se inspirar!
            </p>
            <a href="../../index.php" class="btn btn-primary">Voltar à Página Inicial</a>
        </div>
        <div class="card-footer">
            Enviado em: <?= date("d/m/Y H:i") ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        }

        // Carregar tema salvo
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.documentElement.setAttribute('data-theme', savedTheme);
    </script>
</body>
</html>