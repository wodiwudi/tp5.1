<?php

//注册树
class Register
{
    private static $objects = [];

    public static function set($key,$value)
    {
        self::$objects[$key] = $value;
    }

    public static function get($key)
    {
        if(isset(self::$objects[$key]))
        {
            return self::$objects[$key];
        }
        else return [];
    }

    public static function _unset($key)
    {
        unset(self::$objects[$key]);
    }
}