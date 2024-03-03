# Blog

![Programing Language](https://img.shields.io/badge/Laravel-10-%233178C6?logo=laravel&logoColor=white)
![Programing Language](https://img.shields.io/badge/PHP-8.2-%233178C6?logo=php&logoColor=white)

## Requisitos
Para execução desse projeto é necessário ter o docker instalado e funcional na máquina.


## Setup

* Clonar esse repositório.
* Acessar a pasta do projeto clonado pelo terminal.
* Inicializar o docker caso não esteja em excecução.
* Rodar os seguintes comandos:

```bash
docker compose up -d server
docker compose run --rm composer install
docker compose run --rm artisan migrate
docker compose run --rm artisan db:seed --class=PostSeeder
```

## Informações

O servidor será iniciado em `http:localhost:8000` que é o frontend da lista de matérias.

Para acessar a documentação do Swagger deve-se acessar `http:localhost:8000/api-documentation`

Os endpoints da api são:
* `/api/posts?page=<numero_da_pagina>` i.e /api/posts?page=1
* `/api/posts/<id_do_post>` i.e /api/posts/1

## Swagger
Na documentação do Swagger é possível acessar e testar os dois endpoints através da interface web e executar requisições para os endpoints.