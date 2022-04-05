<?php

// wap in php to show make non-case-sensitive user-defined constants

error_reporting(E_USER_DEPRECATED);

define('gravity',10,1);
echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
?>