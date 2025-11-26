# Cloud app

This project presents a simple PHP application designed for use in a containerized environment. The application runs within an Apache container and is available on port 80. The repository includes a Dockerfile and a docker-compose configuration, allowing you to quickly build, run, and test the application.

## Project structure
```
/cloud_app
│── public/
│    └── index.php
│    └── .htaccess
│── Dockerfile
│── docker-compose.yml
│── README.md

```
## Running project

1. Build the image
   - docker build -t php-app

2. Run the container 
    - docker run -p 80:80 php-app

The application will be available at:
- http://localhost