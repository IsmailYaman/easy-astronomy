# Easy astronomy

## Introduction

This was a school project where I had to make a website using Laravel

## Prerequisites

Before you begin, ensure you have met the following requirements:

- [Composer](https://getcomposer.org/download/)
- [PHP](https://www.php.net/downloads.php) (>= 7.4)
- [Node.js](https://nodejs.org/en/download/) (for managing JavaScript dependencies)
- [Git](https://git-scm.com/downloads)

## Installation

1. Clone the repository:

   ```
   git clone https://github.com/IsmailYaman/easy-astronomy.git
   ```
2. Change into the project directory:
   ```cd your-repo```

3. Install PHP dependencies using Composer:
   ```composer install```

4. Generate application key:
   ```php artisan key:generate```

5. Configure your database connection in the .env file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```
   
   or

   duplicate the ```.env.example``` file and rename it to ```.env```. After that, configure the database connection.  

7. Migrate the database:
   ```php artisan migrate```

## Usage
- Run the development server:
  ```php artisan serve```

   
