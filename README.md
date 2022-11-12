## Getting Started

### Prerequisites

- [Laravel v8](https://laravel.com/docs/8.x)
- PHP v8.0 or above
- [Composer](https://getcomposer.org/download)
- [XAMPP v8.0 or above](https://www.apachefriends.org/download)
- NodeJS

### Installation

1. Clone the repo

   ```sh
   git clone https://github.com/Oiko78/gslc-webprog.git
   ```

2. Install packages

   ```sh
   composer install --ignore-platform-reqs
   npm install
   ```

3. Create .env file by copying from .env.examples

### Usage

Run these commands simultaneously on 2 seperate terminal on the same directory.

- To run the project

  ```sh
  php artisan serve
  ```

- To compile and watch for resources (css, js, images, etc) and file changes

  ```sh
  npm run watch
  ```

For more detailed information on how to install and usage, please refer to [Laravel Installation Guide](https://laravel.com/docs/8.x/installation).
