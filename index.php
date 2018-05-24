<?php
require_once "autoload.php";

$cat = new lib\Cat('garfield');
echo $cat->getName();
echo "<br>";
echo $cat->meow();
