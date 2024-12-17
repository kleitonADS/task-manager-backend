# Task Manager - Gerenciamento de Tarefas / Laravel / Sqlite

Este é um projeto simples de gerenciamento de tarefas, permitindo aos usuários adicionar, editar, marcar como concluídas, excluir e listar tarefas.

## Funcionalidades

- Adicionar tarefas.
- Editar tarefas.
- Marcar tarefas como concluídas.
- Excluir tarefas.
- Listar todas as tarefas.

## Tecnologias

- **Backend:** Laravel (PHP)
- **Banco de Dados:** SQLite
- **API:** RESTful com CRUD (Create, Read, Update, Delete)

## Requisitos

- PHP 8.x ou superior
- Composer
- SQLite

## Como Rodar o Projeto

### 1. Instalar Dependências

Clone o repositório e entre no diretório do projeto:

```bash
git clone https://github.com//kleitonADS/task-manager.git
cd task-manager
```



# Instale as dependências com o Composer:
```bash
composer install
```

---

# Configurar o Banco de Dados
```bash
touch database/database.sqlite

```

---

# Configure o arquivo .env com as informações do banco de dados:
```bash
DB_CONNECTION=sqlite
DB_DATABASE=/path_to_your_project/database/database.sqlite

```

---

# Rodar as Migrações
```bash
php artisan migrate

```

---


# Rodar o Seeder (Popular o Banco de Dados)
```bash
php artisan db:seed

```
---

# Subir o Servidor Local
```bash
php artisan serve


```
O servidor estará rodando em http://localhost:8000.
---

## 1. Testes API
1. GET /tarefas: Listar todas as tarefas
Esta rota retorna uma lista de todas as tarefas no banco de dados.

Testando com Postman:
Método: GET
URL: http://localhost:8000/api/tarefas
Clique em Send no Postman para verificar se todas as tarefas estão sendo retornadas.

Testando com cURL:
bash
Copy code
curl -X GET http://localhost:8000/api/tarefas
2. GET /tarefa/{id}: Obter uma tarefa específica
Esta rota retorna os detalhes de uma tarefa específica, identificada pelo id.

Testando com Postman:
Método: GET
URL: http://localhost:8000/api/tarefa/{id} (substitua {id} pelo ID da tarefa que deseja consultar, por exemplo, http://localhost:8000/api/tarefa/1)
Clique em Send no Postman para verificar os detalhes da tarefa.

Testando com cURL:
bash
Copy code
curl -X GET http://localhost:8000/api/tarefa/1
Substitua 1 pelo ID da tarefa que deseja consultar.

3. POST /tarefa: Criar uma nova tarefa
Esta rota cria uma nova tarefa no banco de dados. Você precisará enviar os dados no corpo da requisição.

Testando com Postman:
Método: POST
URL: http://localhost:8000/api/tarefa
Corpo da requisição (JSON):
json
Copy code
{
    "titulo": "Nova tarefa",
    "descricao": "Descrição da nova tarefa",
    "status": "pendente"
}
Clique em Send para criar a nova tarefa.

Testando com cURL:
bash
Copy code
curl -X POST http://localhost:8000/api/tarefa \
-H "Content-Type: application/json" \
-d '{"titulo": "Nova tarefa", "descricao": "Descrição da nova tarefa", "status": "pendente"}'
4. PUT /tarefa/{id}: Atualizar uma tarefa
Esta rota atualiza os dados de uma tarefa específica. Você precisará enviar o ID da tarefa e os dados a serem atualizados no corpo da requisição.

Testando com Postman:
Método: PUT
URL: http://localhost:8000/api/tarefa/{id} (substitua {id} pelo ID da tarefa que deseja atualizar, por exemplo, http://localhost:8000/api/tarefa/1)
Corpo da requisição (JSON):
json
Copy code
{
    "titulo": "Tarefa Atualizada",
    "descricao": "Descrição atualizada da tarefa",
    "status": "concluido"
}
Clique em Send para atualizar a tarefa.

Testando com cURL:
bash
Copy code
curl -X PUT http://localhost:8000/api/tarefa/1 \
-H "Content-Type: application/json" \
-d '{"titulo": "Tarefa Atualizada", "descricao": "Descrição atualizada da tarefa", "status": "concluido"}'
5. DELETE /tarefa/{id}: Excluir uma tarefa
Esta rota exclui uma tarefa específica identificada pelo id.

Testando com Postman:
Método: DELETE
URL: http://localhost:8000/api/tarefa/{id} (substitua {id} pelo ID da tarefa que deseja excluir, por exemplo, http://localhost:8000/api/tarefa/1)
Clique em Send para excluir a tarefa.

Testando com cURL:
bash
Copy code
curl -X DELETE http://localhost:8000/api/tarefa/1

