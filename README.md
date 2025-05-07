# Laravel Database Relationship Demo

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://github.com/arminmehraeen/Laravel-Database-Relationship/stargazers"><img src="https://img.shields.io/github/stars/arminmehraeen/Laravel-Database-Relationship" alt="Stars"></a>
  <a href="https://github.com/arminmehraeen/Laravel-Database-Relationship/network"><img src="https://img.shields.io/github/forks/arminmehraeen/Laravel-Database-Relationship" alt="Forks"></a>
  <a href="https://github.com/arminmehraeen/Laravel-Database-Relationship/blob/main/LICENSE"><img src="https://img.shields.io/github/license/arminmehraeen/Laravel-Database-Relationship" alt="License"></a>
</p>

## 📝 About

A comprehensive demonstration of Laravel's database relationship capabilities. This project serves as a practical example of implementing various types of database relationships in Laravel, including:

- One-to-One relationships
- One-to-Many relationships
- Many-to-Many relationships
- Polymorphic relationships

## ✨ Features

- 🔐 User Authentication System
- 📝 Blog Post Management
- 🏷️ Category Management
- 💬 Comment System
- ❤️ Like/Unlike Functionality
- 🔄 Multiple Relationship Types
- 🎨 Clean and Modern UI
- 📱 Responsive Design

## 🚀 Quick Start

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL/PostgreSQL
- Node.js & NPM

### Installation

1. Clone the repository
```bash
git clone https://github.com/arminmehraeen/Laravel-Database-Relationship.git
cd Laravel-Database-Relationship
```

2. Install PHP dependencies
```bash
composer install
```

3. Setup environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

5. Run migrations and seeders
```bash
php artisan migrate --seed
```

6. Start the development server
```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## 📚 Database Structure

The project demonstrates various relationship types through these main models:

- **User** - Authentication and user management
- **Post** - Blog posts with relationships to users and categories
- **Category** - Post categorization
- **Comment** - User comments on posts
- **Like** - User interactions with posts

## 🔄 Database Relationships

This project demonstrates various types of Laravel database relationships:

### One-to-One Relationship
- **User ↔️ Profile**: Each user has one profile
```php
// User Model
public function profile()
{
    return $this->hasOne(Profile::class);
}

// Profile Model
public function user()
{
    return $this->belongsTo(User::class);
}
```

### One-to-Many Relationship
- **User ↔️ Posts**: A user can have multiple posts
```php
// User Model
public function posts()
{
    return $this->hasMany(Post::class);
}

// Post Model
public function user()
{
    return $this->belongsTo(User::class);
}
```

### Many-to-Many Relationship
- **Posts ↔️ Categories**: Posts can have multiple categories, and categories can have multiple posts
```php
// Post Model
public function categories()
{
    return $this->belongsToMany(Category::class);
}

// Category Model
public function posts()
{
    return $this->belongsToMany(Post::class);
}
```

### Polymorphic Relationship
- **Comments**: Comments can be made on both posts and other comments
```php
// Comment Model
public function commentable()
{
    return $this->morphTo();
}

// Post Model
public function comments()
{
    return $this->morphMany(Comment::class, 'commentable');
}
```

### Has Many Through
- **User ↔️ Comments**: A user can have many comments through their posts
```php
// User Model
public function comments()
{
    return $this->hasManyThrough(Comment::class, Post::class);
}
```

### Relationship Methods
Common relationship methods used in the project:
- `hasOne()`: One-to-One relationship
- `hasMany()`: One-to-Many relationship
- `belongsTo()`: Inverse of One-to-One or One-to-Many
- `belongsToMany()`: Many-to-Many relationship
- `morphTo()`: Polymorphic relationship
- `morphMany()`: One-to-Many polymorphic relationship
- `hasManyThrough()`: Has-Many-Through relationship

### Eager Loading
The project implements eager loading to prevent N+1 query problems:
```php
// Example of eager loading relationships
$posts = Post::with(['user', 'categories', 'comments'])->get();
```

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👤 Author

**Armin Mehraeen**
- GitHub: [@arminmehraeen](https://github.com/arminmehraeen)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The web framework used
- [Laravel Documentation](https://laravel.com/docs) - For the excellent documentation
