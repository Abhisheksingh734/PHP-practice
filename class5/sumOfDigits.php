<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
      <input type="number" name="num1" id="num" />
      <button type="submit">Calc</button>
    </form>

   
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];

    $sum = 0;
    $num = $num1;

    while($num>0){
        $rem = $num%10;
        $sum = $sum + $rem;
        $num = $num /10;
    }

    echo "Sum of digits of ".$num1." is ". $sum;

}



?>
    
</body>
</html>

