CREATE DATABASE IF NOT EXISTS formulario_clientes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE formulario_clientes;
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único
    nome VARCHAR(255) NOT NULL,        -- Nome do cliente
    email VARCHAR(255) NOT NULL,       -- Email do cliente
    telefone VARCHAR(20) NOT NULL,     -- Telefone do cliente
    endereco VARCHAR(255) NOT NULL,    -- Endereço do cliente
    data_nascimento DATE NOT NULL,     -- Data de nascimento
    genero ENUM('masculino','feminino','outro') NOT NULL -- Gênero
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
