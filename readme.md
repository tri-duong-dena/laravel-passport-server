* This sample app is based on boiler plate: https://github.com/takaaki-mizuno/laravel-boilerplate

# Install Laravel passport
* composer update
* php artisan migrate
* php artisan passport:install
(Sometimes it's neccessary to manually register passport console commands and copy migrate script from vendor folder. Or you can just clone another copy and try again. This is a known issue of Laravel/Passport: https://github.com/laravel/passport/issues/197)

# Frontend build
* npm install
* gulp

# Client creation
* Go to homepage, signin and create a client
* Use client_id and client_secret in client side 
