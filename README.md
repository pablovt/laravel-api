Criação de uma API de Artigos

No POSTMAN

## Cadastro de Autor

http://localhost:8000/api/author
POST - Na opção Body:
name, email

## Buscar Autor por Id

GET
http://localhost:8000/api/author/5

## Remover Id

DELETE
http://localhost:8000/api/author/5

## Atualizar dados do author

PUT
http://localhost:8000/api/author/15

As demais tabelas também seria os mesmos comandos para criação, busca, remoção e atualização.

## Para busca em article por o authorID
POST
http://localhost:8000/api/article/searchByAuthorId
Na opção Body:
author_id 

## Para busca em comments por o articleID
POST
http://localhost:8000/api/article/searchByArticleId
Na opção Body:
article_id 