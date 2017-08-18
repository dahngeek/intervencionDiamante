# intervención Diamante
Backend de la intervención de Diamante


run:
```
composer install
```
then rename `.env.example` to `.env`
and do:
`php artisan key:generate`

Inside `.env` set the settings for the database and run
`php artisan migrate`

to make an decoy admin user run:
`php artisan decoy:admin`

