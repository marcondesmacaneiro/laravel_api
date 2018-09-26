#Como subir todo o ambinete
- Clonar esse projeto para o seu computador.
- Criar uma pasta chamada data, dentro da pasta mysql
- Entrar na pasta do projeto clonado
- Executar o comando: docker-compose up --build

#Como para fazer o stop dos servidores
- Dentro da pasta do projeto executar
- Ctrl+C
- docker-compose kill
- docker-compose rm (y para remover todos os container)

#Como restaurar a Base de Dados
cat mysql/arquivos/northwind-BR-MySQL.sql | docker exec -i mysql-laravelapi /usr/bin/mysql -u root --password=root northwind

#Como fazer um backup atualizado do banco de dados
docker exec mysql-laravelapi /usr/bin/mysqldump -u root --password=root northwind > mysql/arquivos/backup-northwind.sql