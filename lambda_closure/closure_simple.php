<?php
  $user = 'some';

  $a = function (){
    echo "coming from output";
  };

  $greeting = function() use ($a,$user){
    echo $user;
    echo $a();
    return "Hello World";
  };

  echo $greeting();
