<?php

namespace Foobar;

class Foo {
    static public function test() {
        print "Hello world!\n";
    }
}

call_user_func(Foobar .'::Foo::test'); // A partir do PHP 5.3.0
// Hello world!
call_user_func(array(Foobar .'::Foo', 'test')); // A partir do PHP 5.3.0
// Hello world!

?> 