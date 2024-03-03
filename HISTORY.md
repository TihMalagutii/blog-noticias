# Histórico do projeto

## Contexto do projeto
O projeto requisitou a elaboração de um backend com a utilização do framework [Laravel](https://laravel.com/). Esse backend deve ser constituido de dois endpoints, um para apresentar uma lista de matérias com paginação e outro para apresentar os detalhes de uma matéria em específico. Também foram adicionadas duas telas para exemplificação da utilização dos endpoints, uma para a listagem das matérias com paginação (botões de retornar página e avançar página), e uma tela para os detalhes da matéria, ambas seguindo a indicação visual apresentada para o projeto.

## Endpoints
 * Lista de matérias <br>
 
`[GET] /api/posts?page=<numero_da_pagina>&size=<itens_por_pagina>`<br>
`i.e /api/posts?page=1`

Neste endpoint a url aceita dois query params, **page** que indica o número da página a ser retornada e **size** que indica o número de items carregados por página, o valor default para cada parâmetro, respectivamente é page=1 e size=10.

* Detalhes da matéria <br>

`[GET] /api/posts/<id_da_materia>`<br>
`i.e /api/posts/1`

Este endpoint retorna os dados de uma matéria em específico com base no id da matéria.

## Organização do código
Seguindo a estrutura do Laravel, as rotas foram definidas nos arquivos `src/routes/web.php` e `src/routes/api.php`. Foi adicionado também um model e um controlador ao projeto em `src/app/models` e `src/app/http/controllers`, além de uma migration para criação da tabela no banco de dados e uma seeder para popular o banco de dados com matérias fictícias.

## Documentação
Optou-se pela documentação dos endpoints a partir de um padrão Swagger acessíveis no navegador na rota `/api-documentation`.

## Conteinerização
Para conteinerização do projeto foi adicionada uma configuração do docker por meio de arquivos `docker-compose.yaml`, `Dockerfile's` e outras configurações (nginx e mysql).

## Melhorias futuras
Como melhorias adicionais identificadas (caso houvesse mais tempo) poderiam ser implementadas a utilização de algum framework reativo para o frontend (vue, react, angular, etc), melhorias adicionais no layout.
