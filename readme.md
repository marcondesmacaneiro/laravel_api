#Como subir todo o ambinete
- Clonar esse projeto para o seu computador.
- Dentro da pasta laravel/src, duplique o arquivo .env.example para .env
- Configure o arquivo .env com as seguintes propriedades: DB_CONNECTION=mysql, DB_HOST=mysql, DB_PORT=3306, DB_DATABASE=northwind, DB_USERNAME=root, DB_PASSWORD=root
- Entra na pasta larval/src e executar o comando: php artisan key:generate ou subir o projeto primeiro e executar esse outro comando: docker exec -it app-laravelapi php artisan key:generate
- Criar uma pasta chamada data, dentro da pasta mysql
- Entrar na pasta do projeto clonado
- Executar o comando: docker-compose up --build

#Acessando o phpMyAdmin
- Abra a seguinte URL: http://localhost:41113
- Use os dados de login: Servidor: mysql, Utilizador: root, Palavra-passe, root
#Como para fazer o stop dos servidores
- Dentro da pasta do projeto executar
- Ctrl+C
- docker-compose kill
- docker-compose rm (y para remover todos os container)

#Como restaurar a Base de Dados
cat mysql/arquivos/northwind-BR-MySQL.sql | docker exec -i mysql-laravelapi /usr/bin/mysql -u root --password=root northwind

#Como fazer um backup atualizado do banco de dados
docker exec mysql-laravelapi /usr/bin/mysqldump -u root --password=root northwind > mysql/arquivos/backup-northwind.sql