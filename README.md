# PHPUnitTest

## Description
This project was created to study PHPUnit alongside with Mockery Library, and it is based on the Udemy Course [PHP Unit Testing with PHPUnit](https://www.udemy.com/course/php-unit-testing/).

However, this one is working with Docker, and the one showed in the course does not.

## Requirements
As this is a project using Docker, you need to have Docker and DockerCompose ready to be used.

## Building
``docker-compose build``

It should install all the dependencies within the `composer.json`

## Running
``docker-compose up``

It will run the project. However, as this is a project for studying tests, the index page only contains the info of PHP.

## Testing
``docker-compose run --rm phpunit``

The project has an image to run PHPUnit. The flag `--rm` is used for the container be removed after it is done with the tests.

## Composer
``docker-compose run --rm composer %command%``

Use it just like you would use composer, substituting the `%command%` to the actual command you want to run. The flag `--rm` is used for the container be removed after it is done.

## PHP Code Sniffer
``docker-compose run --rm phpcs /path/to/code/myfile.php``

In case you want to check for design patterns inconsistencies on your code.