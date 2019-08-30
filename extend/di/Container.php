<?php


namespace di;

class Container
{
    private static $instances = [];

    private static $instance = null;

    public static function set($key,$value)
    {
        self::$instances[$key] = $value;
    }
    public static function get($key)
    {
      if(isset(self::$instances[$key]))
      {
          return self::$instances[$key];
      }
      else return [];
    }
    public static function _unset($key)
    {
        unset(self::$instances[$key]);
    }
}