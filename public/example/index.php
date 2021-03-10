<?php

error_reporting(error_reporting() & ~E_USER_DEPRECATED);
require __DIR__ . '/../../vendor/autoload.php';

echo \Example\Application::run();
echo "<br>";
printf("Directory: %s, File: %s", __DIR__, __FILE__);
echo "<br>";
printf("Domain: %s, At time %s", $_SERVER['SERVER_NAME'], date('Y.m.d:H:i:s'));