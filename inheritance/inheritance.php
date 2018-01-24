<?php
/**
 *  With Private
 */
  class Car
  {
    private $model;

    public function setCarModel($model)
    {
      $this->model = $model;
    }

    public function getModel()
    {
      return $this->model;
    }

  }

  class SportsCar extends Car
  {
    private $style;

    public function setStyle($style)
    {
      $this->style = $style;
    }

    public function hello()
    {
      echo "My Car model is: ".$this->getModel()." And i drive it ".$this->style;
    }
  }
$car = new SportsCar();
$car->setCarModel('Lamborgini');
$car->setStyle('Very rash');
$car->hello();



/**
 *  With Protected
 */
class Car
{
  private $model;

  public function setModel($model)
  {
    $this->model = $model;
  }

}

class SportsCar extends Car
{
  public function hello()
  {
    echo "My Car model is: ".$this->model;
  }
}

$car = new SportsCar();

$car->setModel('Chiron');

$car->hello();

/**
 * Without the use of final key the parent function can be changed
 */
class Car
{
  public function hello()
  {
    echo "i am final class and i cannot be changed";
  }
}
class SportsCar extends Car
{
  public function hello()
  {
    echo "I am trying to change the parent method";
  }
}

$car = new SportsCar();
$car->hello();


/**
 * using final to make the parent functions immutable
 */
class Car
{
  final public function hello()
  {
    echo "i am final class and i cannot be changed";
  }
}
class SportsCar extends Car
{
  public function hello()
  {
    echo "I am trying to change the parent method";
  }
}

$car = new SportsCar();
$car->hello();
