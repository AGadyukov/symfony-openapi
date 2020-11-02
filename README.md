```` bash
git clone https://github.com/AGadyukov/symfony-openapi.git
cd symfony-openapi
docker run --rm --interactive --tty --volume $PWD:/app composer install
docker run --rm --interactive --tty  --volume $PWD:/app composer make-openapi-doc
docker-compose up -d
````

https://labs.play-with-docker.com/