## Lab 1 ##

# Chrome
http://10.1.10.11

# Chrome
https://hub.docker.com/_/php/

# docker run
docker run -p 8080:80 --name myphp php:5.6-apache

# Chrome
http://10.1.10.11:8080

# docker ps
docker ps

# docker inspect
docker inspect myphp

# docker logs
docker logs myphp

# docker stop
docker stop myphp

#docker rm
docker ps 
docker ps -a
docker rm myphp
docker ps -a

## Lab 2 ##

# docker build setup
cd mycontainer
pwd

# docker build
docker build -t mycontainer:5.6 .

# docker run (detached)
docker run -d --name myapp -p 8080:80 mycontainer:5.6

## Lab 3 ##

# docker tag
docker tag mycontainer:5.6 registry:5000/mycontainer:5.6

# docker push
docker push registry:5000/mycontainer:5.6

# agent02
# docker run (will fail)
docker run --rm –p 8080:80 --name myapp mycontainer:5.6

# agent02
# docker run 
docker run --rm -p 8080:80 --name myapp registry:5000/mycontainer:5.6

# Chrome
http://10.1.10.12:8080/

## Lab 4 ##

#ifconfig
ifconfig -a | head

# agent01
# docker run
docker run -d --name myapp2 -p :80 mycontainer:5.6

# docker port
docker port myapp2

# docker restart
docker restart myapp2
# docker port
docker port myapp2

# windows host
route add 172.17.0.0 mask 255.255.0.0 10.1.10.11


