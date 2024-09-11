<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./addall.php" method="post">
      <input type="number" name="num1" id="num" />;
      <button type="submit">Calc</button>
    </form>

    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];

    $sum = 0;
    for($i=0;$i<$num1;$i++){
        $sum = $sum + $i;
    }
    
    echo "Sum till 0-".$num1 ." is ".$sum;

}



?>
    
</body>
</html>

