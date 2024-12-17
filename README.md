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

## 1. Iniciar o Scraper
- Acesse a página inicial do sistema.
- Clique no botão **"Iniciar / Update"** para começar o scraping.
- O status do progresso será exibido dinamicamente na tela.

---

## 2. Parar o Scraper
- Durante o processo de scraping, clique no botão **"Parar"**.
- O processo será interrompido e uma mensagem de confirmação será exibida.

---

## 3. Filtrar Produtos
Utilize os filtros disponíveis para refinar a busca por produtos:
- **Nome do Produto**: Digite o nome ou parte dele.
- **Marca**: Selecione uma marca da lista.
- **Faixa de Preço**:
  - Até R$100
  - Entre R$100 e R$200
  - Acima de R$200

Os resultados são exibidos em uma grade paginada para facilitar a navegação.

---

## 4. Visualizar Detalhes do Produto
- Clique em qualquer card de produto para visualizar mais informações.
- Um modal será aberto com:
  - **Imagem do Produto**
  - **Descrição Completa**
  - **Outros Detalhes Relevantes**


## **Instalação**

### 1. **Clone o repositório**
```bash
git clone https://github.com/kleitonADS/toyshow_scraper_laravel.git
cd toyshow-scraper
```
### 2. **Instale as dependências**
Back-end (Laravel):
```bash
composer install
```
Front-end:
```bash
npm install
npm run dev
```

### 3. ** Configure o .env**
Crie o arquivo .env com base no exemplo: Banco de dados
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
Queue:
```bash
QUEUE_CONNECTION=database
```

### 4. ** Gere a chave de aplicação **
```bash
php artisan key:generate
```
### 5. ** Configure o banco de dados **
Execute o seguinte SQL no seu servidor MySQL para criar as tabelas necessárias:

```bash
CREATE DATABASE IF NOT EXISTS toyshow_scraper CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE toyshow_scraper;

CREATE TABLE products (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    brand VARCHAR(255),
    description TEXT,
    price DECIMAL(10, 2) DEFAULT NULL,
    price_off DECIMAL(10, 2) DEFAULT NULL,
    image_src VARCHAR(255),
    image_alt VARCHAR(255),
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE jobs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    queue VARCHAR(255) NOT NULL,
    payload LONGTEXT NOT NULL,
    attempts TINYINT UNSIGNED NOT NULL DEFAULT 0,
    reserved_at INT UNSIGNED DEFAULT NULL,
    available_at INT UNSIGNED NOT NULL,
    created_at INT UNSIGNED NOT NULL
);

CREATE TABLE failed_jobs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    uuid CHAR(36) NOT NULL,
    connection TEXT NOT NULL,
    queue TEXT NOT NULL,
    payload LONGTEXT NOT NULL,
    exception LONGTEXT NOT NULL,
    failed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
Depois disso, execute:
```bash
php artisan migrate
```
### 6. ** Rodar as filas para scraping **
```bash
php artisan queue:work
```
Abra no navegador: http://localhost:8000
