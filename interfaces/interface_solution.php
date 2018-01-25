<?php

interface Logger
{
  public function execute($message);
}

class LogToFile implements Logger
{
  public function execute($message)
  {
    var_dump('Log the message to file: '. $message);
  }
}

class LogToDatabase implements Logger
{
  public function execute($message)
  {
    var_dump('Log the message to Database');
  }
}

class UserController
{
  protected $logger;

  function __construct(Logger $logger)
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
