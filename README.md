# PHP POO

## Requirements

- [ ] [docker](https://docs.docker.com/get-docker/)

> ⚠️ For those working on Linux you'll need to install [docker-compose](https://docs.docker.com/compose/install/#install-compose-on-linux-systems) manually, on MacOS or Windows it's included with the desktop app.

## Installation

Clone the project

```shell
# if your using ssh
git clone git@gitlab.com:edemots-courses/dfs22c/php-poo.git
# with https
git clone https://gitlab.com/edemots-courses/dfs22c/php-poo.git
```

## Usage

To execute a file just run in your terminal :

If you have Make

```shell
make -s exec path/to/file.php
```

else with docker

```shell
docker-compose run --rm php php path/to/file.php
```
