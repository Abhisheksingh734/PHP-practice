<?php

$a = 10;
$b = 30;

function add(){
    global $a,$b,$c;
    $a = $a + $b;

}
add();
echo $a;

?>

