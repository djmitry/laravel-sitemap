
## Laravel Form Generator
[![Latest Version on Packagist](https://img.shields.io/packagist/v/djmitry/laravel-sitemap.svg)](https://packagist.org/packages/djmitry/laravel-sitemap)
[![Software License](https://img.shields.io/packagist/l/djmitry/laravel-sitemap.svg)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/djmitry/laravel-sitemap.svg)](https://packagist.org/packages/djmitry/laravel-sitemap)

# Установка
```bash
composer require djmitry/laravel-sitemap:dev-master
```

# Настройка
```bash
php artisan vendor:publish
```

Добавить классы моделей в config/sitemap.php

Карта сайта доступна по адресу /sitemap

# Важно
По умолчанию используется поле slug

Для определения логики построения урл необходимо добавить метод url() в модель

