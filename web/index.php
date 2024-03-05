<?php


use Dotenv\Dotenv;

define('BASE_PATH', dirname(__DIR__));
define('VENDOR_PATH', BASE_PATH.'/vendor');


// Load Composer's autoloader
require_once VENDOR_PATH.'/autoload.php';


if (class_exists('Dotenv\Dotenv') && file_exists(BASE_PATH . '/.env')) {
    $dotenv = Dotenv::createImmutable(BASE_PATH);
    $dotenv->load();
}

// Run the application!

include BASE_PATH.'/templates/page.php';