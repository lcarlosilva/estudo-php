<?php
function destroy_foo()
{
	global $foo;
	echo $foo;
	echo"<br>dentro da fun��o destroi_foo<br>";
	unset($foo);
	echo"dps de unset foo<br>";
	echo $foo;
}
echo $foo;
echo "antes da atribui��o em foo<br>";
$foo = 'bar';

echo "dps da atribui��o<br>";
// echo $foo;
destroy_foo();
echo $foo;
?>
<br>
<?php
function foo()
{
    static $bar;
    echo "start function: $bar, ";
    $bar++;
    echo "Before unset: $bar, ";
    unset($bar);
    $bar = 23;
    echo "after unset: $bar\n";
}

is_null($var);

foo();
foo();
foo();
?>