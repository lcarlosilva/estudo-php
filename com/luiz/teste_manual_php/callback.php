<?php

// Exemplo simples de callback
function my_callback_function() {
    echo 'Olá Mundo!';
}
call_user_func('my_callback_function');

// Exemplo de método callback
class MyClass {
    static function myCallbackMethod() {
        echo 'Olá Mundo!';
    }
}

// Type 1: Simple callback
call_user_func('my_callback_function'); 

// Type 2: Static class method call
call_user_func(array('MyClass', 'myCallbackMethod'));

// Type 3: Chamada de método de objeto
$obj = new MyClass();
call_user_func(array(&$obj, 'myCallbackMethod'));

// Type 4: Static class method call (As of PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Type 5: Relative static class method call (As of PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A

?>