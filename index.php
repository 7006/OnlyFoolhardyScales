<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use OnlyFoolhardyScales\App;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$dotenv->required(['ONLY_FOOLHARDY_SCALES_DATABASE_DSN'])->notEmpty();

App::run();
