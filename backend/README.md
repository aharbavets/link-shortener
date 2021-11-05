Setup
=====
1. In the terminal go to the `backend` directory.
1. Copy the file `.env.example` to a new file `.env`.
1. Edit `.env` and adjust parameter values as needed.
1. Run `composer install`.
1. Generate encryption keys using the command `php artisan key:generate`.
1. Migrate the database using the command `php artisan migrate`  

Run locally for development
===========================
1. In the terminal go to the `backend` directory.
1. Run:
```
php artisan serve
```
