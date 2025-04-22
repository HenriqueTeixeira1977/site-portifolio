<?php
// Configurações
$destino = "seu-email@exemplo.com"; // Substitua pelo seu e-mail
$assunto = "Novo contato do site Henrique Teixeira";

// Coletar os dados do formulário
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$whatsapp = $_POST['whatsapp'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Validação simples
if (!$nome || !$email || !$mensagem) {
    echo "Por favor, preencha todos os campos obrigatórios.";
    exit;
}

// Montar o corpo do e-mail
$corpo = "Você recebeu uma nova mensagem do site:\n\n";
$corpo .= "Nome: $nome\n";
$corpo .= "E-mail: $email\n";
$corpo .= "WhatsApp: $whatsapp\n";
$corpo .= "Mensagem:\n$mensagem\n";

// Cabeçalhos
$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n" .
           "Content-Type: text/plain; charset=UTF-8\r\n";

// Enviar o e-mail
if (mail($destino, $assunto, $corpo, $headers)) {
    echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
} else {
    echo "<script>alert('Erro ao enviar a mensagem. Tente novamente mais tarde.'); window.history.back();</script>";
}
?>
