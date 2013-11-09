<?php

$_CONFIG = array
(
    Config::DATA_STORE => array
    (
        Config::DATA_STORE_DSN      => 'mysql:dbname=shopping_cart;charset=utf8',
        Config::DATA_STORE_USERNAME => 'root',
        Config::DATA_STORE_PASSWORD => 'mypass',
    )
);

Config::setConfig($_CONFIG);