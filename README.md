# Projeto CRUD com Symfony e Doctrine-ORM 
Está Agenda é um projeto CRUD (Create, Read, Update, Delete) desenvolvido com o framework Symfony, seguindo o padrão MVC e utilizando o Doctrine ORM para gerenciar o banco de dados.

## Requisitos

- PHP (versão >= 7.4))
- Composer
- Banco de dados (por exemplo, PostgreSQL)
- Symfony 'https://symfony.com/download'

## Configuração do Symfony

1. Instale o bin do Symfony e extraia para  C:\symfony
2. Após isso vá no procurar do windows e escreva "variáveis de ambiente" e em seguida a abra.
3. Após abrir vá em "Variáveis de Ambiente..." e edite o Path de ambas as variáveis, adicionando o repositório do symfony.

## Instalação

1. Clone o repositório para sua máquina local:

git clone https://github.com/YuriKwill/Agenda_de_Contatos_Magazord

3. Configure o banco de dados editando o arquivo `.env` com suas credenciais:

4. Crie o banco de dados e as tabelas:

- php bin/console doctrine:database:create
- php bin/console doctrine:migrations:migrate

5. Para rodar o projeto, utilize o servidor embutido do Symfony no Windows PowerShell.

- Certifique-se de estar na pasta do projeto. navege utilizando "cd .."

- symfony server:start

7. Acesse o projeto em 'https://127.0.0.1:8000/pessoa/novo'
