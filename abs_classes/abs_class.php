<?php

/**
 *
 */
abstract class Car
{
  protected $tankValue;

  public function setTankValue($tankValue)
  {
    $this->tankValue = $tankValue;
  }

  abstract public function calcNumMilesOnFullTank();
}

/**
 *
 */
class Honda extends Car
{
  public function calcNumMilesOnFullTank()
  {
    echo $miles = $this->tankValue * 33;
  }

  public function carColor()
  {
    echo "Black";
  }
}

$tank = new Honda();
$tank -> setTankValue(10);
$tank -> calcNumMilesOnFullTank();
$tank -> carColor();
