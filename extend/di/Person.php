<?php

namespace di;
class Person
{
    private $obj = null;
    private $a = null;
   public function __construct( Car $obj,$default)
   {
       $this->obj = $obj;
       $this->a = $default;
   }

    public function buy()
  {
      return ($this->obj)->money().'|'.($this->a);
  }
}