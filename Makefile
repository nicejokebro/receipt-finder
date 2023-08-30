docker-exec:
	docker exec -it app bash

docker-build:
	docker compose up --build -d ;\
	docker exec -it app bash -c "composer install";
