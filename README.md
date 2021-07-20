# Getting Started docker basic
```console
docker ps
docker images

docker rm <NAME CONTAINER>
docker build -t <image name> .

# link folder to container (windowns : "%cd%"  Linux : $(pwd))
docker run --name <NAME CONTAINER> -v "%cd%"/<LOCAL FOLDER>/:/<WORK DIR>/ -p <PORT HOST>:<PORT CONTAINER> -d <NAME IMAGE> 
docker run --name <NAME CONTAINER> -p <PORT HOST>:<PORT CONTAINER> <NAME IMAGE>

docker stack ls
docker statck rm <NAME>
docker stack deploy -c docker-stack.yml <NAME>

docker service ls
docker service update --force <NAME>

docker-compose up -d --build
docker-compose down
```
### `express`
```js
cd express
docker-compose up -d --build

Open [http://localhost:8000] to view it in the browser.
```

### `nginx`
```js
cd nginx
docker-compose up -d

Open [http://localhost] to view it in the browser.
```
### `redis`
```js
cd redis
docker-compose up -d

Connection to redis
HOST = localhost 
PORT = 6379
PASSWORD = password1 
```
### `mysql`
```js
cd mysql
docker-compose up -d

Connection to mysql
HOST = localhost 
PORT = 3306
USER = root
PASSWORD = password1 
```
### `postgres`
```js
cd postgres
docker-compose up -d

Connection to postgres
HOST = localhost 
PORT = 5432
USER = root
PASSWORD = password1 
```