# Laravel Blog Template [STATIC]
This is the official repository for my upcoming YouTube tutorials. <br>
•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Usage <br>
Setup the repository <br>
```
git clone git@github.com:codewithdary/laravel-blog-template.git
cd laravel-blog-template
composer install
cp .env.example .env 
php artisan key:generate
php artisan cache:clear && php artisan config:clear 
php artisan serve 
```