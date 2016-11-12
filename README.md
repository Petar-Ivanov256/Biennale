
## Run project

1. Git clone in xampp/htdocs
2. Run "composer update" in the cmd to download all packages
3. Mind the database connection in .env (database: Biennale; username: root; password: <no password>)
4. Run the following script in MySQL to create the database: "CREATE SCHEMA 'biennale'"
5. Run "php artisan migrate:refresh --seed" to refresh the database and to seed the data

## Admin panel
1. To access the admin panel go to /admin
2. Email: biennale@gmail.com Pass: 123456789

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).