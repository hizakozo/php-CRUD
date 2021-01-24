.PHONY:

run:
	docker-compose up -d
down:
	docker-compose down
build:
	docker-compose build
all:
	docker-compose down
	docker-compose build
	docker-compose up -d