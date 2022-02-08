<?php

require __DIR__ . '/../vendor/autoload.php';

use AirPetr\ConsoleCleaner;

$cleaner = new ConsoleCleaner();

while (true) {
    echo date('r') . PHP_EOL;
    sleep(1);

    $cleaner->clean(1);
}
