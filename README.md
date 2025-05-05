# Pi_Website0001
Site aplicativo do projeto integrador 1 no Univesp

## Link Demo:

### Página pública

* [Página do Cliente]()

### Página administração

* [Página da Administração]()

```
OBS: A página de administração não esta protegido pois é apenas um trabalho para o projeto integrador e não algo comercial.
```

## Participantes do projeto:

```
Francisco Adilton de Oliveira
Lucas Edson Santos Silva
Yuri Chagas Sousa
Fillipe de Oliveira Lemos
Flavio Higor da Silva
```

## Instalação e Configuração

Código do projeto integrador 1 foi feito em VisualStudioCode

Faça a instalação do VisualStudioCode

Faça a instalação do MySQL (Docker)

Crie o banco de dados do projeto

```
CREATE DATABASE data_base CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'seu_usuario'@'localhost' IDENTIFIED BY 'sua_senha';
GRANT ALL PRIVILEGES ON meu_banco_django.* TO 'seu_usuario'@'localhost';
FLUSH PRIVILEGES;
```

Isso criará um banco de dados chamado ```data_base``` com o usuário ```seu_usuario``` com a senha ```sua_senha```

Entre na pasta do projeto 

```
cd data_base
```

Faça uma copia do arquivo ```.env-exemplo``` e crie um arquivo  ```.env``` na mesma pasta, abra o arquivo e edite as credenciais do MySQL

```
DB_NAME=data_base       # nome do banco de dados
DB_USER=seu_usuario     # usuário do banco de dados
DB_PASSWORD=sua_senha   # senha do banco de dados
DB_HOST=127.0.0.1       # ou o IP do servidor de banco de dados
DB_PORT=3306            # porta padrão do MySQL
}
```
