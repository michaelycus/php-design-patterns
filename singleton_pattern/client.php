<?php

require "Singleton.php";

$instance  = Singleton::getInstance();
$instance2 = Singleton::getInstance();

var_dump($instance === $instance2);
var_dump($instance, $instance2);
