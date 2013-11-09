<?php

class Config
{
    protected static $_settings = array();

    const DATA_STORE          = 'DATA_STORE';
    const DATA_STORE_DSN      = 'DATA_STORE_DSN';
    const DATA_STORE_USERNAME = 'DATA_STORE_USERNAME';
    const DATA_STORE_PASSWORD = 'DATA_STORE_PASSWORD';
    const DATA_STORE_OPTIONS  = 'DATA_STORE_OPTIONS';
    const FIXTURE_FILENAME    = 'FIXTURE_FILENAME';

    public static function setConfig(array $config)
    {
        foreach ($config as $key => $value)
        {
            static::$_settings[$key] = $value;
        }
    }

    public static function get($key)
    {
        return static::$_settings[$key];
    }

    public static function set($key, $value)
    {
        return static::$_settings[$key] = $value;
    }
}