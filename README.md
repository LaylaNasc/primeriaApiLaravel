<h1 align="center">API SIMPLES</h1>

## SOBRE

Este projeto é uma API simples desenvolvida com Laravel para gerenciar dados de clientes, como nome e email. O objetivo do projeto é demonstrar o uso de factories, seeds, e as funcionalidades básicas de uma API RESTful.

## Funcionalidades

- Retorna o status da API.
- Lista paginada de clientes.
- Busca cliente por ID.
- Adiciona novos clientes.
- Atualiza informações de clientes.
- Remove clientes do banco de dados.

##  Tecnologias Utilizadas

- Laravel: Framework do PHP.
- Factory e Seeder: Para gerar e popular o banco de dados com dados fictícios.
- Banco de Dados:MySQL.
- Faker: Para gerar dados fictícios.
- Postman: Para testar as rotas.

 ## Endpoints

| Método   | Rota                 | Descrição                           |
|----------|----------------------|-------------------------------------|
| `GET`    | `/status`            | Verifica se a API está funcionando. |
| `GET`    | `/clientes`          | Lista todos os clientes (paginado). |
| `GET`    | `/clienteDeId/{id}`  | Retorna um cliente específico.      |
| `POST`   | `/addCliente`        | Adiciona um novo cliente.           |
| `PUT`    | `/updateCliente`     | Atualiza as informações de um cliente. |
| `DELETE` | `/deleteCliente/{id}`| Remove um cliente.                  |
