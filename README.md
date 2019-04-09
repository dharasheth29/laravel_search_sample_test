# How to setup


1. Clone the repository with git clone
2. Copy .env.example file to .env and edit database credentials there
3. Run composer install
4. Run php artisan key:generate
5. Run php artisan migrate
6. Run php artisan db:seed --class=UserSeeder  (this will feed the test data for users table)
