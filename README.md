# taskAssetManager


Make sure you have php-curl installed

run: 
  - composer require php-webdriver/webdriver
  - composer install
  - cp .env.example -env
  (change credentials for database connection)
  - php artisan key:generate
  - php artisan migrate --seed
  
finally php artisan serve and open localhost:8000 in any broswer
