# Instruções de instalação

 1. Clone o repositório Git
 2. Gere o .env com o comando **cp .env.example .env**
 3. Entre no diretório laradock com o comando **cd laradock**
 4. Gere o .env do laradock com o comando **cp env-example .env**
 5. Acesse o .env e altere as variáveis **MYSQL_VERSION** para **5.7** e **MYSQL_PORT** para **33066**
 6. Acesse a pasta **laravel-horizon/supervisord.d** e gere o arquivo **laravel-horizon.config** com o comando **cp laravel-horizon.conf.example laravel-horizon.conf**
 7. Rode o comando **docker-compose up -d --build nginx mysql redis laravel-horizon**
 8. Rode o comando para acessar o container *workspace*: docker-compose exec workspace bash
 9. Então, rode o comando para instalar as tabelas do banco e semear os dados: php artisan migrate --seed 
