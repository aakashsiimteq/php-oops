<?php

/**
 *  To do the sum in the older verison of php
 */
  class Math
  {
    public function add()
    {
      return array_sum(func_get_args());
    }
  }

$add = new Math();

var_dump($add->add(1,2,3,4));

/**
 *  To do the sum in the newer verison of php
 */
class Math
{
  public function add(...$nums)
  {
    return array_sum($nums);
  }
}

$math = new Math();

var_dump($math->add(1,2,3,4,5,6));
