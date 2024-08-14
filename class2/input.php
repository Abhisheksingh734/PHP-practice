<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Type of variables</h1>
<?php 

echo "String type --";
var_dump( "Abhishek");
echo  "<br>";
echo "Integer type --"; 
var_dump(20);
echo  "<br>";
echo "Object type --"; 
var_dump([2,3,5]);
echo  "<br>";
echo "Boolean type --";
var_dump(true);
echo  "<br>";
echo  "<br>";



echo  "Max integer value is " . PHP_INT_MAX . "<br>";
echo "Min integer value is ". PHP_INT_MIN . "<br>";
echo "Size of Integer is ". PHP_INT_SIZE. "<br>";

echo  "<br>";





$a = 1;
$b = "Abhishek";
if(is_int($a)){
    echo " It is an Integer <br>";

    if($a==0){
        echo "The number is 0";
    }else if($a>0){
        echo "The number '".$a."' is positive ->";
    }else{
        echo "The number '".$a."' is negative ->";
    }
    echo "<br>";

    echo "The maximum value of integer can take is ". PHP_INT_MAX ."<br>";
    echo "The minimum value of integer can take is ". PHP_INT_MIN;


}else{
    echo " It is not an Integer";
}



?>
    
</body>
</html>





