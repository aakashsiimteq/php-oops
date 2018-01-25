<?php
/**
 * search for : program to an interface not to an implementation / concretion. 2) repositories
 * the problem was we used a concrete class and it broke down as soon as we neede to swap things out
 * so the simpler version of the rule would be
 * if there are ever classes or tasks where we can imagine having multiple implementation then its an tell tale
 * sign that we need to create aninterface
 */

interface Logger
{
  # code...
}

class LogToFile
{
  public function execute($message)
  {
    var_dump('Log the message to file: '. $message);
  }
}

class LogToDatabase
{
  public function execute($message)
  {
    var_dump('Log the message to Database');
  }
}

class UserController
{
  protected $logger;

  function __construct(LogToFile $logger)
  {
    $this->logger = $logger;
  }

  public function show()
  {
    $user = 'Aakash Dhar';

    // log the information
    $this->logger->execute($user);
  }
}

$controller = new UserController(new LogToFile);

$controller->show();
