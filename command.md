docker-compose up -d nginx mysql workspace phpmyadmin

mysqlへログイン
winpty docker-compose exec mysql bash
mysql -u default -p secret

laravel ログイン
winpty docker-compose exec --user=laradock workspace bash

//mysql version8系だと動かない
laradock/.env

```
MYSQL_VERSION=5.7
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=3306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d
```


docker-compose rm mysql
docker volume rm laradock_mysql
docker-compose build --no-cache mysql

