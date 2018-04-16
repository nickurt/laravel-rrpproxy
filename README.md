## Laravel RrpProxy

### Installation
Install this package with composer:
```
composer require nickurt/laravel-rrpproxy:1.*
```

Add the provider to config/app.php file

```php
'nickurt\RrpProxy\ServiceProvider',
```

and the facade in the file

```php
'RrpProxy' => 'nickurt\RrpProxy\Facade',
```

Copy the config files for the RrpProxy-plugin

```
php artisan vendor:publish --provider="nickurt\RrpProxy\ServiceProvider" --tag="config"
```
### Tests
```sh
phpunit
```
- - - 