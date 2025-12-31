# Cloud app

This project is a simple PHP web application containerized using Docker and Docker Compose.
The application is designed to run in a multi-container environment, where the web application and the database operate as separate services.

The PHP application runs inside a Docker container based on the php:8.2-apache image.
Apache is configured to use the public/ directory as the document root, and URL rewriting is enabled via .htaccess to support basic routing.

The database service is provided by a MySQL container.
Both containers communicate with each other through a shared Docker network, which allows the PHP application to connect to the database using the service name defined in docker-compose.yml (db:3306).

Database credentials and configuration are stored in a .env file and injected into containers as environment variables.
This approach separates sensitive data from the application code and follows best practices for configuration management.

A Docker volume is used to persist database data, ensuring that data is not lost when containers are restarted.

After starting the project with `docker compose up`, the application is running locally via a web browser.

## Project structure
```
/cloud_app
│── public/
│    └── index.php
│    └── .htaccess
│── Dockerfile
│── docker-compose.yml
│── README.md
│── .env


```
## Technologies Used

* PHP 8.2
* Apache HTTP Server
* MySQL 8.0
* Docker
* Docker Compose

## Running project

### In this project there are two ways to run the application:
### First one

1. Build the image
   - docker build -t php-app

2. Run the container 
    - docker run -p 80:80 php-app
   
### Second one
- docker compose up --build

The application will be available at:
- http://localhost