<?php
// load Composer
require 'vendor/autoload.php';

// create demo data
$variable = array(3, 17, "hello", null, array(1, 2, 3));

// use KINT directly (which has been loaded automatically via Composer)
d($variable);
?>