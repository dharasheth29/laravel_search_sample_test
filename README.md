# How to setup


1. Clone the repository with git clone OR download the folder
2. Copy .env.example file to .env and edit database credentials there
3. Run composer install
4. Run php artisan key:generate
5. Run php artisan migrate
6. Run php artisan db:seed --class=UserSeeder  (this will feed the test data for users table, so search can be done straight away)

Functionality Implemented
1. Opening a URL will straightway provides you a Search page, with the listing of aleady exisitng users in the database.
2. Listing page also highlights a user if the memberhsip is expiring in coming 30days.
3. Keyword from firstname, lastname & phone can be used to searh a particular user. 
4. Keyword should be removed and search - to see again all the users.

Technology Used
1. I started with installing laterst version of Laravel - 5.8. 
2. Designed a base search form using html and bootstrap.
3. Created a specific route for it.
4. Created a migration, factory, seeder & controller for Users table.
5. As there is no where, system accepts new user, created a feed to add test data. So search can happen straight away. 
   Factory uses a Faker class to generate the variery of data types we want.

And that's it!!

