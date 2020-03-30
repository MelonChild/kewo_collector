# SEO Collector

Seo Collector is a **Collect framework** for seo website and console applications.

## Requirements

+ PHP >=7.0
+ jaeger/querylist v4.2.1

## Installation

+ composer
  
        composer require kewo/collecter

+ modify config/app.php
  
    ```php
    'providers' => [  
        ...
        Kewo\Collector\CollectorServiceProvider::class
    ],
    'aliases' => [
        ...
        'Collector' => Kewo\Collector\Facades\Collector::class
    ]

+ composer
    
        composer dump-autoload

+ publish resource files

        php artisan vendor:publish --provider="Kewo\Collector\CollectorServiceProvider"

## Usage

### Initialize Collector Resolver




