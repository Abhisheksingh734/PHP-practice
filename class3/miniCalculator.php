<?php

if(isset($_POST['operation'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $op = $_POST['operation'];
    if($op == "+"){
        $sum = $num1 + $num2;
        echo $sum. "<br>";
    }else if($op == "-"){
        $sub = $num1 - $num2;
        echo $sub. "<br>";
    }else if($op == "x"){
        $mul = $num1 * $num2;
        echo $mul. "<br>";
    }else if($op == "/"){
        $div = $num1 / $num2;
        echo $div. "<br>";
    } 
}

?>