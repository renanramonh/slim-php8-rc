build:
	docker-compose build
	
init: build start

start:
	docker-compose up -d
	
stop:
	docker-compose down
	
logs:
	docker-compose logs -f
