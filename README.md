# Sistema de Posts - Laravel

Sistema simples de gerenciamento de posts desenvolvido com Laravel, onde usuários podem criar, visualizar, editar e deletar seus próprios posts. A aplicação possui autenticação completa com registro e login, além de um sistema de autorização baseado em policies para garantir que apenas os donos dos posts possam modificá-los.

## 📋 Sobre a Aplicação

Este é um site de posts simples desenvolvido em Laravel. A aplicação permite que usuários compartilhem posts de texto. Os posts são públicos e podem ser visualizados por qualquer visitante, mas apenas usuários autenticados podem criar novos posts. Apenas o dono de um post pode editá-lo ou deletá-lo.

**Público-alvo:** Desenvolvedores e estudantes que desejam testar e aprender Laravel através de um sistema simples de compartilhamento de posts.

## 🎨 Interface

A aplicação possui um design simples com variações de branco, criando uma experiência visual limpa. A interface é totalmente responsiva e intuitiva.

![Tela Principal](https://res.cloudinary.com/dp5iuxy1u/image/upload/v1763510822/Screenshot_from_2025-11-18_21-05-34_ozrn06.png)
*Tela principal mostrando a listagem de posts*

## 🚀 Tecnologias Utilizadas

- **Laravel 12.38.1** - Framework PHP
- **PHP 8.4+** - Linguagem de programação
- **MySQL** - Banco de dados
- **Laravel Sanctum** - Autenticação
- **Blade** - Template engine

## 📦 Pré-requisitos

Antes de começar, você precisará ter instalado:
- PHP 8.2 ou superior
- Composer
- MySQL
- Git

## ⚙️ Instalação e Configuração

### 1. Clone o repositório (se aplicável)
```bash
git clone <url-do-repositorio>
cd post-post-fullstack/post-post
```

### 2. Instale as dependências do Composer
```bash
composer install
```

### 3. Instale as dependências do NPM (opcional, para assets frontend)
```bash
npm install
```

### 4. Configure o arquivo de ambiente
```bash
cp .env.example .env
```

Edite o arquivo `.env` e configure:
- `APP_NAME`: Nome da aplicação
- `APP_URL`: URL da aplicação (geralmente `http://localhost:8000`)
- `DB_CONNECTION`: Tipo de banco (mysql)
- `DB_HOST`: Host do banco (geralmente `127.0.0.1`)
- `DB_PORT`: Porta do banco (geralmente `3306`)
- `DB_DATABASE`: Nome do banco de dados
- `DB_USERNAME`: Usuário do banco
- `DB_PASSWORD`: Senha do banco

### 5. Gere a chave da aplicação
```bash
php artisan key:generate
```

### 6. Execute as migrações
```bash
php artisan migrate
```

### 7. (Opcional) Publique as configurações do Sanctum
```bash
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
```

## ▶️ Executando a Aplicação

### Desenvolvimento Local

Para iniciar o servidor de desenvolvimento:

```bash
php artisan serve
```

A aplicação estará disponível em: `http://localhost:8000` ou `http://127.0.0.1:8000`

### Modo Desenvolvimento Completo (com Vite)

Para iniciar com todas as ferramentas de desenvolvimento (servidor, fila, logs e Vite):

```bash
composer run dev
```

## 📚 Módulos da Disciplina Utilizados

Esta aplicação foi desenvolvida utilizando os seguintes módulos do curso:

1. **📖 03 | Estrutura do Framework** - Foi utilizado para entender a estrutura básica do Laravel, organização de diretórios, configuração de variáveis de ambiente (.env) e ciclo de vida da aplicação.

2. **📖 04 | Roteamento e Ciclo de Vida de uma Request** - Implementado o sistema completo de rotas (GET, POST, PUT, DELETE), uso de rotas nomeadas, separação de responsabilidades seguindo o padrão MVC com controllers e actions bem definidos.

3. **📖 05 | Views com Blade** - Desenvolvidas todas as views usando Blade template engine, incluindo uso de layouts, subviews (@extends, @section), condicionais (@auth, @if), loops (@forelse), e interpolação de variáveis.

4. **📖 07 | Forms e Validação de Requisições** - Implementado sistema completo de validação utilizando Form Requests (StorePostRequest, UpdatePostRequest, LoginRequest, RegisterRequest, UpdateProfileRequest), separando a lógica de validação dos controllers. Aplicadas regras de validação para todos os formulários (posts, autenticação e perfil), tratamento de erros campo a campo nas views, e uso de dados "old" para manter valores preenchidos em caso de erro de validação.

5. **📖 08 | Autenticação de Usuários** - Implementado sistema completo de autenticação com Laravel Sanctum, middleware 'auth' para proteger rotas, tela de login e registro, e gerenciamento de sessões de usuário.

6. **📖 11 | Autorização com Policies e Testes de Feature** - Criada PostPolicy para controlar permissões de acesso (visualização pública, criação apenas para autenticados, edição/exclusão apenas pelo dono do post), aplicando regras de autorização nos controllers.

## 🗄️ Estrutura do Banco de Dados

### Tabelas Principais

- **users**: Armazena informações dos usuários (id, name, email, password)
- **posts**: Armazena os posts (id, user_id, title, content, timestamps)
- **sessions**: Gerencia sessões de usuários
- **personal_access_tokens**: Tokens do Laravel Sanctum

### Relacionamentos

- Um usuário possui muitos posts (One to Many)
- Um post pertence a um usuário (Many to One)


## 🛠️ Comandos Úteis

```bash
# Limpar cache
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Executar migrações
php artisan migrate

# Executar migrações do zero (cuidado: apaga dados)
php artisan migrate:fresh

# Acessar o Tinker (console interativo)
php artisan tinker
```
## 👨‍💻 Autor

Desenvolvido como projeto acadêmico utilizando Laravel Framework.
