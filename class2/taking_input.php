<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      <label for="name" name="num1"> </label>
      Enter first number: <input type="number" name="num1" id="num1" /><br />
      Enter second number: <input type="number" name="num2" id="num2" /> <br />
      <input type="submit" value="Add" name="operation" />
      <input type="submit" value="Sub" name="operation" />
    </form>
    <?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation= $_POST['operation'];

    if($num1 != NULL)
    if($operation == "Add" ){
      $sum = $num1 + $num2;
      echo "<br> Summation of ".$num1 ." and ".$num2. " is ". $sum;
  }else if($operation == "Sub"){
      $sub = $num1 - $num2;
      echo "Subtraction of ".$num1 ." from ".$num2. " is ". $sub;
  }

}

?>
  </body>
</html>
