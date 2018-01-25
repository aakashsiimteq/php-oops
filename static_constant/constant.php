<?php

/**
 *  The syntax while defining an const variable is that it should have all
 *  uppercase charecters. You can always use the scope resolution opt
 *  to use an constant variable.
 */
class BankAccount
{
  const TAXVALUE = 0.9;
}

echo BankAccount::TAXVALUE;
