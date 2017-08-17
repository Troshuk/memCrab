docker -v (версія)
docker run hello-world (встановлення образу)
docker images (перевірка установлених образів)
docker ps -a (список контейнерів, включаючи зупинені)
docker pull ubuntu:16.04 (завантаження образу Ubuntu)
docker run -it ubuntu:16.04 /bin/bash (запуск образу Ubuntu, відкриваєм інтерактивну оболочку контейнера)
uname -a

docker info
docker run -i -t ubuntu /bin/bash
docker ps показывает список всех запущенных контейнеров
docker ps -a – список всех, включая остановленные
docker run --name <имя контейнера> -t -i ubuntu
docker start <имя контейнера>
docker attach <имя контейнера>
docker run --name <имя контейнера> -d ubuntu /bin/bash -c "while true; do echo hello world; sleep 1; done"
docker logs <имя контейнера>
docker stop <имя контейнера>
docker start <имя контейнера>
docker inspect <имя контейнера>
docker rm <имя контейнера>
docker cp <путь к данным на хосте> <имя контейнера>:<путь>
docker run -v /tmp:/root -t -i <имя образа>
docker commit <id контейнера> <имя образа>
docker save имя_образа > ~/transfer.tar
docker load < /tmp/transfer.tar

mkdir static_web
cd static_web
touch Dockerfile
docker build -t troshuk/nginx ~/static_web

docker commit -m "What did you do to the image" -a "Author Name" container-id repository/new_image_name
docker login -u docker-registry-username
docker push docker-registry-username/docker-image-name





docker run -d -m 256m ubuntu-nginx /usr/sbin/nginx 
# указaть максимальный объем памяти, который будет доступен контейнeру
docker build .
docker build --tag=private/mysql .
docker run -i -t --rm private/mysql top
docker run -i -t --rm private/mysql mysqld
docker run -i -t --rm private/mysql bash
cd /var/lib/mysql
docker run -i -t --rm -v /docker-volumes/mysql-data1:/var/lib/mysql  private/mysql bash
/start.sh
docker run \
    --name=mysql1 \
    -v /docker-volumes/mysql-data1:/var/lib/mysql \
    -p 172.17.0.1:3306:3306 \
    -d private/mysql
docker ps
docker exec -i -t mysql1 mysql
apt-get install mysql-client
mysql -h 172.17.0.1 -u user1 -p

mysql> show databases;
mysql> quit
docker run -i -t --rm troshuk/php bash
docker rmi $(docker images -q -f dangling=true)

--log-driver=none
CMD while true ; do echo "hey"; sleep 1; done > /dev/null

docker run --name new_name it ubuntu /bin/bash
docker rm -f $(docker ps -aq)
docker logs -f daemon
docker run –name daemon ubuntu /bin/sh -c "while true; do echo hello world; sleep 1; done"
docker run -i -t –rm ubuntu /bin/bash
docker run -d --name test-nginx -p 80:80 -v $(pwd):/usr/share/nginx/html:ro nginx:latest
docker inspect test-nginx









<1> # docker exec
docker exec -i -t mysql1 mysql
- запуск команд у запущеному контейнері

<2> # docker attach
docker attach <container name> 
- підлкючення до контейнера демона

<3> # docker logs
docker logs -f <container name>

<4> # билд должен уметь с обязательным указанием тега
docker build --tag=private/<image name> .

<5> # пушить по имени тега в облако
docker commit c16378f943fe rhel-httpd
docker tag rhel-httpd registry-host:5000/myadmin/rhel-httpd
docker push <image>:<tag>
docker commit -m "<text commit>" -a "<Author Name>" <container-id> <repository>/<image name>
docker login -u <image docker user_name>
docker push <docker user_name repository>/<image name>

<6> # все окманды мониторинга и подчистки
docker rm -f $(docker ps -aq)
docker rmi $(docker images -q -f dangling=true)
docker inspect <image name> / вся інфа про контейнер
docker rm <container name>
docker rmi <image name>
docker system prune / очистка усіх зупинених контейнерів
docker top <container name> / процеси
docker events <container name> / події
docker port <container name> / відкриті порти
docker diff <container name> / змінені файли
docker stats <container name> / статистика використання ресурсів

<7> # как посмотреть образы
docker images

<8>как посмотреть запущенные контейнеры
docker ps

<9> # как посмотреть все
docker ps -a

<10> # понимать какой статус у контейнера
docker inspect <image name> / вся інфа про контейнері

<11> # стоп ран стартинг и т.п.
docker run <image/container name>
	docker run [опции] образ [команда]
	-i  Интерактивный режим, держим STDIN открытым
	-t  Allocate/creates a pseudo-TTY that attaches stdin and stdout
	--name  Имя контейнера вместо ID
	-w  Указать рабочую директорию (--workdir)
	-e  Установить переменную окружения в контейнере
	-u  Пользователь:группа под которым должен быть запущен контейнер
	-v  Смонтировать в контейнер файл или каталог хост-системы
	-p  Пробросить порт(ы) контейнера - <порт хост-системы>:<порт контейнера> (--publish=[])
	--entrypoint  Заменить дефолтную команду из ENTRYPOINT файла Dockerfile
docker stop <container name>
docker start <container name>
docker restart <container name>

<12> # после этого переходишь к docker-compose
docker-compose.yml
docker-compose up --build
docker-compose ps
docker-compose stop <name>
docker-compose start <name>
docker-compose rm <name>
docker-compose down
docker-compose exec <name> bash