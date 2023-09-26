# Projeto CRUD com Symfony

Este é um projeto CRUD (Create, Read, Update, Delete) desenvolvido com o framework Symfony, seguindo o padrão MVC e utilizando o Doctrine ORM para gerenciar o banco de dados.

## Requisitos

- PHP (versão X.X.X)
- Composer
- Banco de dados (por exemplo, MySQL)

## Instalação

1. Clone o repositório para sua máquina local:

git clone https://github.com/YuriKwill/Agenda_de_Contatos_Magazord

2. Instale as dependências do projeto:

composer install

3. Configure o banco de dados editando o arquivo `.env` com suas credenciais:

4. Crie o banco de dados e as tabelas:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

Para rodar o projeto, utilize o servidor embutido do Symfony:

symfony server:start

Acesse o projeto em [[http://127.0.0.1:8000/](https://127.0.0.1:8000/pessoa/novo)https://127.0.0.1:8000/pessoa/novo]
