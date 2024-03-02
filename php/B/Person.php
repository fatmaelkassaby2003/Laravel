<?php
namespace B;

use Info;
use A\B\Person as personA;

//define('ajyal',true);
const laravel = 'laravel B';

function hello()
{
  echo 'hello B';
}
class Person extends personA implements human
{
  use Info;
  const male = 'm';
  const female = 'f';
  public $name;
  protected $gender;
  private $age;
  public static $country;
  public function __construct()
  {
    echo __CLASS__;
  }
  public static function setCountry($country, $city = '')
  //$city option بدل overload اكرر ال method
  // option لابد يكون ف الاخر 
  {
    //$this deal with static
    self::$country = $country;//static
    self::male;//const
  }
}