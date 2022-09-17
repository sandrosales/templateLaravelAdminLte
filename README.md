# Passo a passo

# Clone Repositório
```sh
git clone https://github.com/sandrosales/templateLaravelAdminLte.git app-laravel
```
# Acesse o diretorio
```sh
cd app-laravel/
```
# Crie o Arquivo .env
```sh
cp .env.example .env
```
# Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Portal
APP_URL=http://portal:8181

DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```
# Atualize as variáveis de ambiente Docker
docker-compose.yml
Dockerfile
nginx/nginx/laravel.conf

# Suba os containers do projeto
```sh
docker-compose up -d
```
# Acessar o container
```sh
docker-compose exec app bash
```
# Instalar as dependências do projeto Larevel
```sh
composer install
```
# Gerar a key do projeto Laravel
```sh
php artisan key:generate
```
# Instalando os pacote do Npm
```sh
npm install
```
# Instalando os pacote do AdminLte via npm
```sh
npm install admin-lte@^3.2 --save
```
# Execute o servidor de desenvolvimento Vite...
```sh
npm run dev
```
# Construir e versionar os ativos para produção...
```sh
npm run build
```
# Acessar o projeto 
```sh
http://localhost:8181
```

