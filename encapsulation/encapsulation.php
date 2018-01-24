<?php

  class Atm{
    private $customerId;
    private $atmPinNumber;
    private $amount;

    public function verifyCustomer($customerId, $atmPinNumber) {
       ... function body ...
   }

   // Withdraw Cash function
   public function withdrawCash($amount) {
       ... function body ...
   }

   // Retrive mini statement of our account
   public function miniStatement() {
       ... function body ...
   }
  }
