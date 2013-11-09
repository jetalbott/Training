<?php

$_CONFIG = array
(
    Config::DATA_STORE => array
    (
        Config::DATA_STORE_DSN      => 'mysql:dbname=shopping_cart_test;charset=utf8',
        Config::DATA_STORE_USERNAME => 'root',
        Config::DATA_STORE_PASSWORD => 'mypass',
    	Config::DATA_STORE_OPTIONS  => array
        (
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ),
    ),
);

Config::setConfig($_CONFIG);