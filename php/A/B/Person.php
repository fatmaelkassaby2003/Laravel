<?php
// PSP-4
namespace A\B;
use Info;
const laravel='laravel B';

function hello()
{
  echo 'hello A';
}
class Person
{
  use Info;
  const male ='m';
  const female='f';
  public $name;
  protected $gender;
  private $age;
  public static $country;
  public function __construct()
  {
    echo __class__;
  }
  
  public static function setCountry($country)
  {
    //$this deal don't with static
    self::$country=$country;//static
    self::male;//const(no $)
  }
}