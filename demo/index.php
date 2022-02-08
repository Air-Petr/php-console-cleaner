<?php

require __DIR__ . '/../vendor/autoload.php';

use AirPetr\ConsoleCleaner;

$cleaner = new ConsoleCleaner();

$name = readline("Write your name: ");
$age = readline("Write your age: ");

$cleaner->clean(2);
echo "OK. You are $name. And you are $age.\n";

die();