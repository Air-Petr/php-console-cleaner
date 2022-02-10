# PHP Console Cleaner

Clear text from the console.

## Instalation

``composer require ar-petr/php-console-cleaner``

## Usage

```php
require __DIR__ . '/../vendor/autoload.php';

use AirPetr\ConsoleCleaner;

$cleaner = new ConsoleCleaner();

echo "Line 1\n";

// -> Line 1

echo "Line 2\n";

// -> Line 1
// -> Line 2

$numberOfLinesToClean = 1;
$cleaner->clean($numberOfLinesToClean);

// -> Line 1
```

## Demo

You can run examples in your console:

```shell
php demo/index.php
php demo/timer.php
```