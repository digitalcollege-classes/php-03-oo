# SETUP PHP

Uma base de aplicação limpa (sem frameworks), para estudos em PHP Orientado a objetos.

Essa estrutura já está dockerizada, então basta ter o docker compose rodando em seu computador que é pra dar tudo certo.

## Tecnologias

- PHP 8.3
- MySQL
- nginx

## Como usar

Primeiro basta clonar o repositório

`git clone https://github.com/digitalcollege-classes/sistema-classificados`

Agora entre na pasta com o terminal

`cd sistema-classificados`

E agora basta rodar o docker

`docker compose up -d`

E agora rodar o composer install para instalar as dependencias

`docker compose exec -T php bash -c "composer install"`

Pronto,é sucesso!

Acesse o <http://localhost:8080>

## Como contribuir com o GIT

1. **Passo 1:** Atualizar a main

    ```shell
    git checkout main
    git pull origin main
    ```

2. **Passo 2:** Criar a nova branch

    ```shell
    git checkout -b <nome-da-branch>
    ```

3. **Passo 3:** Realizar as alterações da tarefa

    > Códigos: HTML, CSS, PHP, etc

4. **Passo 4:** Commitar e abrir o PR

    ```shell
    git add .
    git commit -m "O que a alteração faz?"
    git push origin <nome-da-branch>
    ```

    Ao fazer isso vai aparecer um link para abrir o pull request

5. **Passo 5:** Caso haja alteração a serem feitas

    ```shell
    git add .
    git commit --amend --no-edit
    git push origin <nome-da-branch> -f
    ```
