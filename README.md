# Ideas Laravel Project

A simple Laravel v10 project where users can share ideas, comment on others’ ideas, and interact with each other. This project demonstrates authentication, middleware, database relationships, and email notifications in Laravel.

---

## Features

- User registration and login (authentication using Laravel Breeze or built-in auth)
- Profile management (edit name, bio, profile image)
- Create, edit, and view ideas
- Comment on other users' ideas
- Like ideas
- Follow/unfollow users
- Email notifications upon registration
- Fully relational database using MySQL
- Dummy data seeding for testing

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/yourusername/ideas.git
cd ideas
```

2. Install dependencies:

```bash
composer install
npm install
npm run dev
```


3. Update .env File

```bash
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=ideasdb
DB_USERNAME=root
DB_PASSWORD=
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourgmail@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=yourgmail@gmail.com
MAIL_FROM_NAME="IdeasApp"
```

4. Run migrations and seeders:

```bash
php artisan migrate:fresh --seed
```

## Start the Local server
```bash
php artisan serve
```

## Contact
Developer: Kartikay Bhardwaj <br>
Email: bhardwajkartikay489@gmail.com

<p align="center">Made with 💖 by Kartikay. </p>
