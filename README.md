<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Harry Potter Restful Api

Harry Potter Restful Api with laravel

## Usage
first config your database connection

```
DB_CONNECTION=mysql

DB_DATABASE=laravel_harry_potter_restful_api
```
then run migrations

```
php artisan migrate
```
add images to storage/app/public/ dir then run 

```php
php artisan storage:link
```

finally run database seeders

```
php artisan db:seed
```

## Available Endpoints

| # | verbs | endpoints | description |
| :---: | :---: | --- | --- |
|1| Get | /books | Get all books |
|2| Get | /book/:id | Get book by id |
|3| Get | /book/:slug | Get book by slug |
|4| Get | /book/:id,:id | Get multiple books |
|5| Get | /characters| Get characters |
|6| Get | /character/:id| Get character by id|
|7| Get | /character/:slug| Get character by slug|
|8| Get | /character/:id,:id| Get multiple characters |
|9| Get | /spells| Get all spells|
|10| Get | /spell/:id| Get spell by id|
|11| Get | /spell/:slug| Get spell by slug|
|12| Get | /spell/:id,:id| Get multiple spells|
|13| Get | /potions | Get all potions|
|14| Get | /potion/:id | Get potion by id|
|15| Get | /potion/:slug | Get potion by slug|
|16| Get | /potion/:id,:id | Get multiple potions|
|17| Get | /houses | Get all house|
|18| Get | /house/:id | Get house by id|
|19| Get | /house/:slug | Get house by slug|
|20| Get | /house/:id,:id | Get multiple houses|
|21| Get | /houses/house:id/features | Get features of specific house|
|22| Get | /staff| Get all staff|
|23| Get | /staff/:id| Get staff by id|
|24| Get | /staff:slug| Get staff by slug|
|25| Get | /staff/:id,:id| Get multiple staffs|
|26| Get | /students| Get all students|
|27| Get | /student/:id| Get student by id|
|28| Get | /student/:slug| Get student by slug|
|29| Get | /student/:id,id| Get multiple students|
|30| Get | /peoples | Get all normal peoples|
|31| Get | /people/:id | Get people by id|
|32| Get | /people/:slug | Get people by slug|
|33| Get | /students| Get all students|
|34| Get | /student/:id | Get student by id|
|35| Get | /student/:slug | Get student by slug|
|36| Get | /student/:id,:id| Get multiple students|
|37| Get |/movies| Get all movies |
|38| Get |/movie/:id| Get movie by id|
|39| Get |/movie/:slug| Get movie by slug|
|40| Get |/movie/:id,:id| Get multiple movies|
|41| Get |/movie/{movie:id}/stars| Get stars of specific movie|
|42| Get |/movie/{movie:id}/producers| Get producers of specific movie|
