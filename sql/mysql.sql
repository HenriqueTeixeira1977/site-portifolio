-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS portfolio_henrique CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Selecionar banco
USE portfolio_henrique;

-- Criar tabela
CREATE TABLE IF NOT EXISTS mensagens_contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    whatsapp VARCHAR(20),
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
