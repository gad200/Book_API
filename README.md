# Laravel Books API

This project is a RESTful API built with **Laravel** to manage books (CRUD operations) using the **Repository** and **Service** patterns for clean code architecture. The API allows you to create, read, update, and delete book records, where each book has an `id` (ULID), `title`, `author_name`, and `publishing_date`.

The application is also **Dockerized** to simplify running it in any environment, and it includes unit tests using **PHPUnit** and API tests using **Postman**.

## Features

- **CRUD operations** for managing books
- **Repository & Service Pattern** for clean architecture and separation of concerns
- **ULID** for unique book identifiers
- **Unit Tests** using PHPUnit
- **API Tests** using Postman
- **Dockerized** environment for easy setup

## Requirements

- PHP >= 8.1
- Composer
- Docker
- MySQL

## Setup and Installation


### 1. Clone the repository
```bash
git clone https://github.com/yourusername/laravel-books-api.git
cd laravel-books-api
```
2. Install dependencies
 ```bash
composer install
```
3. Set up environment variables
Copy the .env.example file and configure the database and other necessary environment variables:
 ```bash
cp .env.example .env
```
Modify .env to configure the database (MySQL):

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=books_db
DB_USERNAME=root
DB_PASSWORD=root

4. Start the application with Docker
```
docker-compose up -d
```
5. Run Migrations
After starting the containers, run the database migrations to create the necessary tables:

```
docker-compose exec app php artisan migrate
```
API Endpoints
Here are the main API endpoints for managing books:

Method	Endpoint	Description
POST	/api/books	Create a new book
GET	/api/books	List all books
GET	/api/books/{id}	Get a specific book
PUT	/api/books/{id}	Update a specific book
DELETE	/api/books/{id}	Delete a specific book


Testing
1. Unit Tests with PHPUnit
The project includes unit tests using PHPUnit for testing the repository and service layers. To run the tests:
```
docker-compose exec app php artisan test
```
2. API Tests with Postman
A Postman collection is available for testing the API. You can import the Postman Collection from the repository and run the tests via the Postman UI or use the Postman CLI.

3. Refresh Database for Testing
If you want to reset the database and re-run the migrations and seeds for testing purposes:
```
docker-compose exec app php artisan migrate:fresh --seed
```


Project Structure
The project follows Repository and Service patterns for clean separation of concerns and testability.

Repository: Handles database operations.
Service: Contains business logic and interacts with the repository.
Controller: Handles HTTP requests and responses.
├── app
│   ├── Http
│   │   └── Controllers
│   │       └── BookController.php
│   ├── Models
│   │   └── Book.php
│   ├── Repositories
│   │   ├── BookRepositoryInterface.php
│   │   └── BookRepository.php
│   └── Services
│       └── BookService.php
├── database
│   ├── factories
│   │   └── BookFactory.php
│   ├── migrations
│   └── seeders
│       └── BookSeeder.php
└── tests
    └── Unit
        └── BookRepositoryTest.php


Docker
This project includes a Dockerfile and docker-compose.yml for running the application in a Dockerized environment.

Dockerfile
The Dockerfile sets up a PHP-FPM environment with the necessary PHP extensions and Composer.

Docker Compose
The docker-compose.yml file sets up two services:

app: Runs the Laravel application.
mysql: Runs the MySQL database.
Troubleshooting
If you encounter any issues with the Docker containers or migrations, try clearing the cache:
```
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
```
