<?php
/* Start entry point of the app */

// load composer
require_once __DIR__ . '/../vendor/autoload.php';

// load our app defaults
require_once __DIR__ .  '/../appLoader.php';

// run the app
\AIS\App::run(false);