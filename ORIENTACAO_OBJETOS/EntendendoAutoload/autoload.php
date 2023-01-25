<?php
spl_autoload_register(function($class){
    if (file_exists('classess/'.$class.'.php')) {
        require 'classess/'.$class.'.php';
    }
});