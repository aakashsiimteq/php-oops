<?php
//  Basic __construct
class Tweet
{
  public $id;
  public $text;
  function __construct($id , $text)
  {
    $this->id = $id;
    $this->text = $text;
  }

  public function printName()
  {
    echo "The id is: ".$this->id." the text is: ".$this->text;
  }
}
//  initialization and output
// $tweet = new Tweet(123,'First attempt');
// $tweet->printName();

// Calling a parents __construct method
class ParentClass
{
  public $name;
  function __construct($name)
  {
    $this->name = $name;
  }
}

class Child extends ParentClass
{
  public $id;
  public $text;

  function __construct($id,$text,$name)
  {
    $this->id = $id;
    $this->text = $text;
    ParentClass::__construct($name);
  }

  public function printDetails()
  {
    echo "The id of the tweet is: ".$this->id."\nThe tweet is: ".$this->text."\nBy: ".$this->name;
  }
}
//  initialization and output
// $parent = new Child(123,'This is a tweet example by inheriting constructor from parent','Aakash');
// $parent->printDetails();


// __destruct basic example
public function __destruct()
{
  $this->connection->destroy();
}
