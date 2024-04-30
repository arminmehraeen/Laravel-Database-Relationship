<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Database Relationship

This is a simple Laravel database relationship project with basic functionalities.

## Getting Started

To get started with this project, follow these steps:

1. Clone the repository to your local machine:

    ```bash
    git clone https://github.com/arminmehraeen/Laravel-Database-Relationship.git
    ```

2. Install Composer dependencies:

    ```bash
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables, including database connection details:

    ```bash
    cp .env.example .env
    ```

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Run migrations to create the database tables:

    ```bash
    php artisan migrate
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

7. Access the application in your web browser at `http://localhost:8000`.

## Database Schema

The database schema consists of the following tables:

- **users**: Stores information about registered users, including their name, email, and password.
- **posts**: Stores information about blog posts, including their title, body, image, and the user who created the post.
- **categories**: Stores information about post categories.
- **category_post**: Pivot table to establish a many-to-many relationship between posts and categories.
- **comments**: Stores information about comments on posts, including the message, the user who made the comment, and the post the comment belongs to.
- **likes**: Pivot table to establish a many-to-many relationship between users and posts for tracking likes on posts.

## Models

The project includes the following Eloquent models:

- `User`
- `Post`
- `Category`
- `Comment`

## License

This project is licensed under the [MIT License](LICENSE).
