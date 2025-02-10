# Laravel Docker Setup Guide

This guide outlines the steps to build and run a Laravel application using Docker.

## Prerequisites
- Docker installed on your system
- Laravel project stored in `src/` directory
- MySQL data storage in `data/` directory

## Steps

### 1️⃣ Build the Docker Images
Build the necessary images for the Laravel application, MySQL database, Composer, and Node.js:
```sh
# Build Laravel app image
docker build -t myapp .

# Build MySQL image
docker build -t mydb -f dockerfile.mysql .

# Build Composer image
docker build -t mycomposer -f dockerfile.composer .

# Build Node.js image
docker build -t mynode -f dockerfile.node .
```

### 2️⃣ Create a Docker Network
Create a bridge network named `larwork` to enable communication between containers:
```sh
docker network create -d bridge larwork
```

### 3️⃣ Install Dependencies
Run Composer and Node.js inside temporary containers to install Laravel dependencies:
```sh
# Install PHP dependencies using Composer
docker run --rm -v ${PWD}/src/:/var/app/ mycomposer

# Install JavaScript dependencies using Node.js
docker run --rm -v ${PWD}/src/:/var/app/ mynode
```

### 4️⃣ Start the MySQL Container
Run the MySQL container and mount the `data/` directory for persistent storage:
```sh
docker run --name mydb --network larwork -d -v ${PWD}/data/:/var/lib/mysql/ mydb
```

### 5️⃣ Start the Laravel Application Container
Run the Laravel application container and expose it on port 8080:
```sh
docker run --name myapp --network larwork -d -p 8080:80 -v ${PWD}/src/:/var/www/html/ myapp
```

### 6️⃣ Set Correct Permissions
Ensure Laravel has the necessary permissions for the `storage/` directory:
```sh
docker exec myapp /bin/bash -c 'chown -R www-data:www-data ./storage/'
docker exec myapp /bin/bash -c 'chmod -R 775 storage'
```

### 7️⃣ Run Database Migrations
Execute Laravel migrations inside the running application container:
```sh
docker exec myapp php artisan migrate
```

## Accessing the Laravel Application
Once all steps are completed, access your Laravel project in a web browser at:
```
http://localhost:8080
```

## Verification
To confirm the setup, ensure:
- The web server is running (`myapp` container is up)
- The MySQL database is running (`mydb` container is up)
- Laravel loads correctly at `http://localhost:8080`
- Database migrations complete successfully

🚀 Your Laravel app should now be fully functional with Docker! 🎉

