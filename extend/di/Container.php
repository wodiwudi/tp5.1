<?php


namespace di;

class Container
{
    private static $instances = [];

    private static $instance = null;

    public static function set($key,$value)
    {
        //将value首字母大写
        $arr = explode('\\',$value);
        $change = ucfirst($arr[count($arr)-1]);
        $length = ~strlen($change);
        $prefix = substr($value,0,$length+1);
        $value = $prefix.$change;
        self::$instances[$key] = $value;
    }

    //使用反射获取
    public static function get($key)
    {
      if(isset(self::$instances[$key]))
      {
          $key = self::$instances[$key];
      }
      else return [];
      $reflect =  new \ReflectionClass($key);
      //开始获取类的构造函数
        $constructor = $reflect->getConstructor();
        if(!$constructor)
        {
            //没有构造函数直接返回实例
        return new $key;
        }
        //拿构造函数的参数
        $params = $constructor->getParameters();
        if(empty($params))
        {  //构造函数没有参数
            return new $key;
        }
        foreach ($params as $param)
        {
            $class = $param->getClass();
            if(is_null($class))
            {
                //throw new \Exception("不存在的类{$param}");
            }
            else{
                $classname = explode('\\',$class->name);
                $key = lcfirst($classname[count($classname)-1]);
               $arr[] = self::get($key);
            }
        }
        return $reflect->newInstanceArgs($arr);

    }
    public static function _unset($key)
    {
        unset(self::$instances[$key]);
    }
}