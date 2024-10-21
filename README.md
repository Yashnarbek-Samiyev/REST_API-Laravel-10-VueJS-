# REST API with Laravel 10 and Vue.js

This project is a full-stack web application featuring a RESTful API built with Laravel 10 (Backend) and a front-end using Vue.js.

## Table of Contents
- [Prerequisites](#prerequisites)
- [Installation](#installation)
  - [Backend (Laravel 10)](#backend-laravel-10)
  - [Frontend (Vue.js)](#frontend-vuejs)
- [Configuration](#configuration)
  - [Backend Configuration](#backend-configuration)
  - [Frontend Configuration](#frontend-configuration)
- [Running the Application](#running-the-application)
- [API Documentation](#api-documentation)
- [Testing](#testing)
  - [API Testing with Postman](#api-testing-with-postman)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you begin, ensure you have the following installed on your system:
- PHP >= 8.1
- Composer
- Node.js & npm
- Laravel 10
- Vue CLI

## Installation

### Backend (Laravel 10)

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/yourproject.git
    cd yourproject
    ```

2. Install backend dependencies:

    ```bash
    composer install
    ```

3. Create the `.env` file by copying the example:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Set up the database in the `.env` file:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. Run the database migrations:

    ```bash
    php artisan migrate
    ```

7. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

### Frontend (Vue.js)

1. Navigate to the `frontend` directory (or wherever the Vue.js app is located):

    ```bash
    cd frontend
    ```

2. Install frontend dependencies:

    ```bash
    npm install
    ```

3. Start the development server:

    ```bash
    npm run dev
    ```

## Configuration

### Backend Configuration

Ensure the following settings in your `.env` file for Laravel 10:

```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:generatedkey
APP_DEBUG=true
APP_URL=http://localhost:8000
