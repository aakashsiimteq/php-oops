<?php

  /**
   *  INTERFACE implementation
   */
  interface Animal
  {
    public function bark();
  }

  abstract class dog implements animal
  {
    public function bark()
    {
      echo "bark bark bark";
    }

  }

/**
 *
 */
class dogeat extends dog
{

}

$inetr = new dogeat;
$inetr->bark();
