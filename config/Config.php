<?php
define('SERVER', 'localhost');
define ('USER', 'root');
define ('PASSWORD', '');
define ('DB', 'warsaw');
function __autoload($className){ 
    require 'class/'. $className.'.php';
}