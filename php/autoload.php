<?php

spl_autoload_register
(function($classname)
  {
  include __dir__."/{$classname}.php";
  }
);