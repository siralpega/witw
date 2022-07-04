# Where in the World
Wordle with geography. This version is different than other "worldle" apps as it doesn't use territories.

# Installation
## Dependencies
- PHP 8.1+
- Composer 2.3+
- NPM 6.14+
- MariaDB 10+

## Installing
Run the following commands in the project directory:
- `composer install`
- `npm install`
- `npm run prod`
- `cp .env.example .env`
- `php artisan key:generate`

Create a database and fill out the database info in the `.env` file (`DB_HOST`, `DB_PORT` `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`)
Then run the following commands:
- `php artisan migrate`
- `php artisan db:seed`

## Cron
Create a cron task to run the scheduler, which creates a new answer daily. Replace `<path>` with the path to the project:\
`* * * * * cd /<path> && php artisan schedule:run >> /dev/null 2>&1`\
You can also create an answer by running the command `php artisan answer:create`