<?php


class A
{
    private $a = 1;
    public $b = 2;
    public static $c = 3;
    /**
     * @return string
     */
  public function abc()
  {
      return 'abc';
  }

    /**
     * @return string
     */
  public function def($a)
  {
      return $a;
  }
}