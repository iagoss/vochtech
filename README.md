# Login + Crud

Login de usuário (Sem cadastro) + CRUD de pessoas

## 🚀 Começando

baixe um arquivo zip do projeto e extraia ou clone este repositório.

### 📋 Pré-requisitos

PHP8

Apache

### 🔧 Instalação

1° No terminal, acesse a pasta raiz do projeto

```
cd {CAMINHO_DO_PROJETO}
```

2º Instale as dependências do projeto via composer

```
composer install
``` 

3º Renomeie o arquivo **.env.example** para **.env** e gere uma nova key app

```
 type .env.example > .env
 
 php artisan key:generate
```


4º Crie um novo banco de dados

5º Configure o arquivo .ENV: 

```
...
DB_DATABASE={Nome do banco de dados}
DB_USERNAME={Usuário do banco de dados}
DB_PASSWORD={Senha do banco de dados}
...
```

6º Crie as migrações no banco de dados

```
php artisan migrate
```

7º Inicie o Projeto

```
php artisan serve
```

8º Acesse a url gerada do projeto em andamento, normalmente esta url é ***127.0.0.1:8000***


## 🛠️ Construído com

* [Laravel](https://laravel.com/docs/9.x) - O framework web usado
* [Tailwindcss](https://tailwindcss.com/) - Css framework

## ✒️ Autor

* **Iago Santana** - *Desenvolvedor* - [iagoss](https://github.com/iagoss)
##
