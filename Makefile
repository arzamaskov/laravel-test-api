env-prepare:
	cp -n .env.example .env || true

setup: compose-build
	docker-compose run --rm application composer install

install: composer install

db-prepare:
	php artisan migrate

start:
	docker-compose up -d

console:
	docker-compose run --rm application bash

test:
	php artisan test

compose-build:
	docker-compose build

compose-setup: install key db-prepare

start-app:
	php artisan serve --host 0.0.0.0 --port 8000
