# REST API with Laravel

This application provides REST API for generating a random number.

The application includes two methods:
1. To generate random number with assignment unique ID
2. To receive number

## Usage

1. Prepare .env-file:

```shell
make env-prepare
```

2. Set the database parameters in .env:

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_api
DB_USERNAME=admin
DB_PASSWORD=root
```

3. Build an application

```shell
make setup
make db-prepare # prepare database
```

4. Launch server

```shell
make start  # launch on http://127.0.0.1:8000/
```

5. Launch bash

```shell
make console
```

6. Launch tests

```shell
make test
```
