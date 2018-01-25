<?php
/**
 *  constructors
 */
class Baseclass
{
  function __construct()
  {
    echo ucwords("from the baseclass function");
  }
}

class Subclass extends Baseclass
{
  function __construct()
  {
    parent::__construct();
    echo ucwords("from the subclass function");
  }
}

class Someclass extends Baseclass
{

}

$b = new Baseclass();
$sbc = new Subclass();
$smc = new Someclass();
