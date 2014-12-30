<pre>
<?php

$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);

echo "com var_dump";
var_dump($a);

?>
</pre>
<br>
<?php
echo "COM RETURN TRUE<br>";
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results agora contém a saída de print_r

echo $results;
?>