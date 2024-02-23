<?php
  namespace A;

  include __DIR__.'/autoload.php';
  //include __DIR__.'/B/person.php';

  //use B\Person;

  $person=new \A\B\person;//=======> person in B
  $person2=new \B\Person;//\namespace A عشان اطلع من 

  $person->name='ali';
  $person2->name='ahmed';

  $person->setAge(10);

  $person::$country='egypt';
  $person2::$country='alex';//class بتتغير على مستوى ال 

  echo'<pre>';
  var_dump($person,$person2);
  echo'</pre>';

  echo B\Person::$country;
  echo'<br>';
  echo $person::male;