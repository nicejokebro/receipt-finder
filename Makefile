docker-exec:
	docker exec -it app bash

docker-build:
	docker compose up --build -d ;\
	docker exec -it app bash -c "composer install";
	docker exec -it app bash -c "composer create-project symfony/skeleton:\"6.2.*\" /var/www/html/app";
