# Laravel Midtrans
An ordinary example of using midtrans payment gateway with laravel

## Install
1. `composer install`
2. Update database configuration in `.env`
3. `php artisan migrate --seed`
4. Add midtrans keys
```
MIDTRANS_MERCHAT_ID=
MIDTRANS_CLIENT_KEY=
MIDTRANS_SERVER_KEY=
```

## Depedencies
1. `"midtrans/midtrans-php": "^2.5"`
2. `"laravel/framework": "^8.75"`
