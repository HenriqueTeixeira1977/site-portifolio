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
