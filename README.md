# Clock-ClockProv
# Test Laravel Package -  Clock 
This is test Laravel package using composer to get Date and  clock 

# installation
Run This Command on your composer
` composer require Clock/ClockProv:dev-master `
after completed to download package 
open your app.php file from this path `config/app.php`
put this to provider array  line 
```php
       Clock\ClockProv\ClockProvider::class,
```
and this aliases array from package 
```php
      'Clock' => Clock\ClockProv\ClockFacdecs::class,
```
Now Please Run this command on your composer 
` php artisan vendor:publish `

## usage 
To use this Package  clock
```php
Colck::clock();
```
or if you want use map 
```php
Clock::map()
```
