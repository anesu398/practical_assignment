# Laravel Admin Panel with CRUD, Charts, and Notifications

This is a **Laravel-based admin panel** with features like **CRUD operations**, **charts**, and **notifications**. It uses the **AdminLTE** template for the admin interface and integrates seamlessly with Laravel's backend.

---

## Table of Contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [Usage](#usage)
6. [Deployment](#deployment)
7. [Contributing](#contributing)
8. [License](#license)
9. [Support](#support)

---

## Features

- **Admin Panel**:
    - Built with **AdminLTE** for a responsive and modern interface.
    - Includes a **dashboard**, **user management**, and **settings** pages.
- **CRUD Operations**:
    - Manage users with **Create, Read, Update, and Delete** functionality.
- **Charts**:
    - Display data using **Chart.js**.
- **Notifications**:
    - Show success/error messages using Laravel's session flash notifications.
- **Authentication**:
    - Admin middleware to restrict access to authorized users.

---

## Requirements

Before you begin, ensure you have the following installed:

- **PHP** (>= 8.0)
- **Composer** (for dependency management)
- **Node.js** (for frontend asset compilation)
- **MySQL** (or any other supported database)
- **Git** (for version control)

---

## Installation

Follow these steps to set up the project locally:

### 1. Clone the Repository

```bash
git clone https://github.com/anesu398/practical_assignment.git
cd practical_assignment
```

### 2. Install PHP Dependencies

Install Composer dependencies:

```bash
composer install
```

### 3. Install Node Dependencies

Install Node.js dependencies:

```bash
npm install
```

### 4. Set Up Environment Variables

Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```

Update the `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 5. Generate Application Key

Generate a unique application key:

```bash
php artisan key:generate
```

### 6. Run Migrations and Seeders

Run migrations to create the database tables:

```bash
php artisan migrate
```

Seed the database with test data:

```bash
php artisan db:seed
```

### 7. Compile Assets

Compile frontend assets using Laravel Mix:

```bash
npm run dev
```

For production, use:

```bash
npm run prod
```

### 8. Start the Development Server

Run the Laravel development server:

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser to view the application.

---

## Configuration

### Admin Access

To access the admin panel, log in with the following credentials:

- **Email**: `admin@example.com`
- **Password**: `password`

You can modify these credentials in the `DatabaseSeeder.php` file.

### Customizing AdminLTE

You can customize the AdminLTE template by editing the `config/adminlte.php` file or overriding its views.

---

## Usage

### Admin Panel

- **Dashboard**: View charts and statistics.
- **Users**: Manage users with CRUD operations.
- **Settings**: Update application settings.

### Frontend

- **Home**: Landing page with a hero section and features.
- **About**: Information about the application.
- **Contact**: Contact form for user inquiries.

---

## Deployment

### Deploying to a Live Server

1. **Set Up the Server**:
     - Ensure PHP, MySQL, and a web server (e.g., Apache, Nginx) are installed.
     - Clone the repository to the server.

2. **Configure Environment**:
     - Update the `.env` file with production credentials (e.g., database, mail server).

3. **Optimize for Production**:
     - Clear the cache:
         ```bash
         php artisan config:cache
         php artisan route:cache
         php artisan view:cache
         ```
     - Compile assets for production:
         ```bash
         npm run prod
         ```

4. **Set Up Web Server**:
     - Configure your web server (Apache/Nginx) to point to the `public` directory.

5. **Run Migrations**:
     - Run migrations on the production server:
         ```bash
         php artisan migrate --force
         ```

6. **Set Up Cron Jobs**:
     - Add a cron job for Laravel's task scheduler:
         ```bash
         * * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1
         ```

### Deploying with Docker

1. **Install Docker**:
     - Install Docker and Docker Compose on your server.

2. **Set Up Docker Compose**:
     - Create a `docker-compose.yml` file:

         ```yaml
         version: '3'
         services:
             app:
                 build:
                     context: .
                     dockerfile: Dockerfile
                 container_name: laravel_app
                 restart: always
                 working_dir: /var/www/html
                 volumes:
                     - .:/var/www/html
                 networks:
                     - laravel_network

             webserver:
                 image: nginx:alpine
                 container_name: laravel_webserver
                 restart: always
                 ports:
                     - "80:80"
                 volumes:
                     - .:/var/www/html
                     - ./docker/nginx:/etc/nginx/conf.d
                 networks:
                     - laravel_network

             db:
                 image: mysql:5.7
                 container_name: laravel_db
                 restart: always
                 environment:
                     MYSQL_DATABASE: your_database_name
                     MYSQL_USER: your_database_user
                     MYSQL_PASSWORD: your_database_password
                     MYSQL_ROOT_PASSWORD: your_root_password
                 ports:
                     - "3306:3306"
                 networks:
                     - laravel_network

         networks:
             laravel_network:
                 driver: bridge
         ```

3. **Build and Run Containers**:

     ```bash
     docker-compose up -d
     ```

4. **Run Migrations**:

     ```bash
     docker-compose exec app php artisan migrate
     ```

---

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

---

## License

This project is open-source and available under the MIT License.

---

## Support

For any questions or issues, please open an issue on the GitHub repository.

Enjoy using the Laravel Admin Panel! 🚀

