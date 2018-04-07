docker/start:
	docker-compose up -d

docker/stop:
	docker-compose down

docker/logs:
	docker-compose logs

docker/clean:
	docker-compose rm
