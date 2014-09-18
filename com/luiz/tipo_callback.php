<?php

class myclass {
  static function say_hello()
  {
    echo "Hello!\n";
  }
}

$classname = "myclass";

call_user_func(array($classname,'say_hello'));
call_user_func($classname .'::say_hello'); // A partir do 5.2.3


?> 