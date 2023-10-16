<?php

require_once __DIR__ . '/../src/Hello.php';
require_once __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$wilder = new Hello();

echo ($wilder->talk());
