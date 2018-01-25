<?php

# the basic rule of thumb is one class per file
use Acme\Person;
use Acme\Buisness;
use Acme\Staff;


$aakash = new Person('Aakash');
$staff = new Staff([$aakash]);
$conceptionweb = new Buisness($staff);

$conceptionweb->hire(new Person('Paulami Dey'));

var_dump($conceptionweb->getBuisnessMembers());
