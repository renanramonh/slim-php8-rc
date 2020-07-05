# PHP8 RC with Slim Framework
This is a test of the PHP 8 RC with [slim framework](http://www.slimframework.com/).
Slim dependencies are not 100% compatible with php8 then it runs composer install on an old php version and copies the files to php8 container

## Requirements
[Docker](https://docs.docker.com/engine/install/) version >=19.03.8

[Docker Compose](https://docs.docker.com/compose/install/) version>=1.25.4

## Commands
| Command | Description |
| --- | --- |
| `make build` | build docker images |
| `make init` | build docker images and start docker containers |
| `make start` | start docker containers |
| `make stop` | stop docker containers |
| `make logs` | show logs of containers |

## API
this service has a **calculate** endpoint that has two inputs.

_endpoint_:
  GET /calculate/{numberA}/{numberB}


_sample call_:
  curl -X GET 'http://localhost/calculate/1/2'

_result_:
```json
{
  "sum":3,
  "multiplication":2,
  "subtraction":-1,
  "division":0.5
}
```
