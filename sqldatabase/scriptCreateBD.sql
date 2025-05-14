CREATE DATABASE IF NOT EXISTS formulario_clientes CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE formulario_clientes;
CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(255) NOT NULL,        
    email VARCHAR(255) NOT NULL,       
    telefone VARCHAR(20) NOT NULL,     
    endereco VARCHAR(255) NOT NULL,    
    data_nascimento DATE NOT NULL,     
    genero ENUM('masculino','feminino','outro') NOT NULL)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `endereco`, `data_nascimento`, `genero`) VALUES 
('1', 'João Silva', 'joao@gmail.com', '11987654321', 'Rua A, 123', '1990-01-01', 'masculino');

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES ('1', 'admin', '123');