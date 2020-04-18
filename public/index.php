<?php

require "../vendor/autoload.php";

use App\Wcs\Hello;

$Hello = new Hello();
echo $Hello->talk();