<?php

namespace di;
class Person
{
    private $obj = null;
   public function __construct( Car $obj,$default = 1)
   {
       $this->obj = $obj;
   }

    public function buy()
  {
      return ($this->obj)->money();
  }
}