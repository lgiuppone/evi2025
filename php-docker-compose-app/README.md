# Project Template: PHP Docker Compose Application

This project demonstrates how to set up a PHP application with Docker and Docker Compose, along with a MySQL database. The application connects to the database and handles HTTP requests.

## Project Structure

```
php-docker-compose-app
├── src
│   └── index.php
├── docker
│   ├── php
│   │   └── Dockerfile
│   └── db
│       └── init.sql
├── .env
├── docker-compose.yml
└── README.md
```

## Requirements

- Docker
- Docker Compose

## Getting Started

### Step 1: Clone the Repository

Clone this repository to your local machine:

```shell
git clone https://github.com/yourusername/php-docker-compose-app.git
cd php-docker-compose-app
```

### Step 2: Build the Docker Images

Use Docker Compose to build the images for the PHP application and the database:

```shell
docker-compose build
```

### Step 3: Run the Application

Start the application and the database services:

```shell
docker-compose up
```

### Step 4: Access the Application

Once the services are running, you can access the PHP application in your web browser at:

```
http://localhost:8080
```

### Step 5: Initialize the Database

The database will be initialized with the SQL commands specified in `docker/db/init.sql` when the database service starts.

## Environment Variables

You can configure the application by modifying the `.env` file. This file contains environment variables such as database credentials and application settings.

## Stopping the Application

To stop the running services, use:

```shell
docker-compose down
```

## Additional Information

- The PHP application is located in the `src` directory, with `index.php` as the entry point.
- The Dockerfile for the PHP application is located in `docker/php/Dockerfile`.
- The SQL initialization script is located in `docker/db/init.sql`.

For more details on Docker and Docker Compose, refer to the official documentation:

- [Docker Documentation](https://docs.docker.com/)
- [Docker Compose Documentation](https://docs.docker.com/compose/)