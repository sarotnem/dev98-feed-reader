dev98 Feed Reader
======

This is a sample task for netz98. It parses the RSS feed of https://dev98.de/ blog and displays the results, while also displaying individual articles.

## Technologies
Developed using Laravel and Vue.js along with Vue-Router.

## Instructions
After cloning the project, cd into the directory and run:

`composer install`

Next copy the .env.example file

`cp .env.example .env`

After the copy finishes run

`php artisan key:generate`

Create a database and pass the appropriate values in the .env file

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=
```

Next create the database tables along with a sample user

`php artisan migrate:refresh --seed`

The new user has an *api_token* value. Copy this token and insert the value in the .env file

`MIX_API_KEY="your_api_token"`

Finally run

`npm install && npm run dev`



