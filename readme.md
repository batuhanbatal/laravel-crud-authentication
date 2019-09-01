## Laravel-Crud-Authentication
![Alt text](https://user-images.githubusercontent.com/20479629/64078789-c79d5780-cce7-11e9-8f15-84c00942cafd.gif)
### Project install
`
git clone https://github.com/batuhanbatal/laravel-crud-authentication.git 
`

### Vendor folder and other files
`
composer update
`

Copy **.env.example** file rename to **.env**

### Project key generate
`
php artisan key:generate
`
### Database connection
Create database and create find these fields in the .env file and enter your information

`
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
`

### Cache clear
`
php artisan config:cache
`

### Make migrate
`
php artisan migrate
`

### Make seed
`
php artisan db:seed
`

### Run project
`
php artisan serve
`  
### Login info 
`
email    : admin@example.com
password : 123456
`
