<?php
namespace B;
use Info;
use A\B\Person as personA;
//define('ajyal',true);
const laravel='laravel B';

function hello()
{
  echo 'hello B';
}
class Person extends personA
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
    //$this deal with static
    self::$country=$country;//static
    self::male;//const
  }
}