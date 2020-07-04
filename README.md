# PHP8 RC
This is a test of the new PHP 8 with [slim framework](http://www.slimframework.com/).
Slim dependencies are not 100% compatible with php8 then it runs composer install on an old php version and copies the files to php8 container

## Commands
| Command | Description |
| --- | --- |
| `make build` | build docker images |
| `make init` | build docker images and start docker containers |
| `make start` | start docker containers |
| `make stop` | stop docker containers |
| `make logs` | show logs of containers |
