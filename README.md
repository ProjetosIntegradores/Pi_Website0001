# Pi_Website0001
Site aplicativo do projeto integrador 1 no Univesp:
Cliente TekTintas

## Link Demo:

### Página Inicial

* [Página do Cliente]()

## Participantes do projeto:
```
Francisco Adilton de Oliveira
Lucas Edson Santos Silva
Yuri Chagas Sousa
Fillipe de Oliveira Lemos
Flavio Higor da Silva
```
## Historia e Desenvolvimento

Código do projeto integrador 1 foi feito em VisualStudioCode, MySQL Workbench e XAMPP.

Essa e minha primeira vez criando um site com banco de dados, tive diversas dificuldades durante o desenvolvimento, porem com ajuda de videos no youtube, repertorios do github e cursos dessa faculdade. Consegui fazer um banco de dados funcional.

A principio usei Python, mas depois de falhar algumas vezes tentando fazer sem instrucoes, troquei para php para melhor seguir outros desenvolvedores...

## Instalação e Configuração

Primeiro Baixe Xampp em https://www.apachefriends.org/pt_br/index.html
![Site onde baixa Xampp](imagens/BaixeXampp.png)

Instale Xampp:
![Ao abrir o instalador pressione next](imagens/passo1.png)
![Para o funcionamento do site somente o MYSQL e phpMyAdmin são necessários](imagens/passo2.png)
![Escolha uma pasta onde o Xampp e o site vão ficar hospedados](imagens/passo3.png)

Inicie um servidor localhost no Xampp:
![Ao abrir o Xampp inicie o servidor](imagens/Iniciehospedagem.png)

Crie o banco de dados do projeto:
Abra o phpMyAdmin em um navegador com http://localhost/phpmyadmin
![Interface do phpMyAdmin](imagens/phpMyAdmin.png)
Copie o comando abaixo e execute o sql
```
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

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

Para poder acessar o sistema, insira um usuario.
Exemplo:
```
INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES ('1', 'admin', '123');
```
Os valores '1', 'admin', '123' podem ser alterados para as respectivas customizacoes do usuario.

## Referencias e Citasoes

https://www.youtube.com/playlist?list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK
