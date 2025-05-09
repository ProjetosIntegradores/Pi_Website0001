# Pi_Website0001
Site aplicativo do projeto integrador 1 na Univesp:  
Cliente TekTintas

## Link Demo:

### Página Inicial

* [Página Inicial]()
Para logar no gerenciador de sistema use:  
usuário: admin, senha: 123

## Participantes do projeto:
```
Francisco Adilton de Oliveira  
Lucas Edson Santos Silva  
Yuri Chagas Sousa  
Fillipe de Oliveira Lemos  
Flavio Higor da Silva
```

## História e Desenvolvimento

O código do projeto integrador 1 foi desenvolvido no Visual Studio Code, MySQL Workbench e XAMPP.

Essa é minha primeira vez criando um site com banco de dados. Tive diversas dificuldades durante o desenvolvimento, porém, com a ajuda de vídeos no YouTube*, repositórios do GitHub** e cursos desta faculdade***, consegui criar um banco de dados funcional.

A princípio, usei Python, mas depois de falhar algumas vezes tentando fazer sem instruções, troquei para PHP para melhor seguir outros desenvolvedores.

## Instalação e Configuração

Primeiro, baixe o XAMPP em https://www.apachefriends.org/pt_br/index.html

![Site onde baixa XAMPP](imagens/BaixeXampp.png)

Instale o XAMPP:  
Abra o instalador do XAMPP e pressione "Next":

![Ao abrir o instalador pressione next](imagens/passo1.png)

Selecione as opções de MySQL e phpMyAdmin, depois pressione "Next":

![Para o funcionamento do site somente o MySQL e phpMyAdmin são necessários](imagens/passo2.png)

Escolha o diretório onde o XAMPP será instalado:

![Escolha uma pasta onde o XAMPP e o site vão ficar hospedados](imagens/passo3.png)

Inicie o aplicativo XAMPP e ative o servidor localhost:

![Ao abrir o XAMPP inicie o servidor](imagens/Iniciehospedagem.png)

Crie o banco de dados do projeto:  
Abra o phpMyAdmin em um navegador com http://localhost/phpmyadmin

![Interface do phpMyAdmin](imagens/phpMyAdmin.png)

Copie o comando abaixo e execute o SQL:

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

Para poder acessar o sistema, insira um usuário.  
Exemplo:

```
INSERT INTO `usuarios` (`id`, `usuario`, `senha`) VALUES ('1', 'admin', '123');
```

Os valores '1', 'admin', '123' podem ser alterados para as respectivas customizações do usuário.

Também há a opção de executar o `scriptCreateBD.sql`, mas será necessário instalar o MySQL Workbench.

## Referências e Citações

* https://www.youtube.com/playlist?list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK  
** https://github.com/piunivespintegrador/pi2_univesp  
***