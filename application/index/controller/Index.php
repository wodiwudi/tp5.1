<?php
namespace app\index\controller;
use di\Acount;
use di\Container;
class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        //halt(input());
    echo memory_get_peak_usage().PHP_EOL;
        echo memory_get_usage();
    }

    public function test()
    {
        \Register::set('test',new \A());
        dump(\Register::get('test')->abc());
    }

    public function reflect()
    {
        $a = new \A();
        $obj = new \ReflectionClass($a);
        $obj2 = $obj->newInstance();
        $methods = $obj->getMethods();
        foreach ($methods as $method)
        {
         //   var_dump($method->getDocComment());
        }
        $pro = $obj->getProperties();
        //调用反射的方法
        $method = new \ReflectionMethod($a,'def');
        var_dump($method->invoke($a,111));



    }

    public function container()
    {
        Container::set('person',"\di\person");
        Container::set('car',"\di\car");
        $args[] = 1;
        $obj = Container::get('person',$args);
        dump($obj->buy());
    }

    public function acount()
    {
        new Acount();
        var_dump(count(new Acount()));
    }
    public function facade()
    {
        //实际的Facade类调用
        $obj = new \app\common\Facade();
        echo $obj->abcd();

        var_dump( \Zxw::abcd());
    }
}
