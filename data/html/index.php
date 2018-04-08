<?php
require __DIR__ . '/vendor/autoload.php';
define('ENV', 'DEV');

if (ENV === 'DEV') {
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
}
