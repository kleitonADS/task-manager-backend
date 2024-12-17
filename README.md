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














## 1. Iniciar o Scraper

