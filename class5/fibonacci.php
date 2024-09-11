<?php 


$a = 0;
$b = 1;

echo "0 1 ";

for($i=2;$i<20;$i++){
    $sum = $a + $b;
    $temp = $b;
    $b = $sum;
    $a = $temp;
    echo $sum." ";
}

function fibo($num){
    if($num == 0 || $num == 1) return $num;

    return fibo($num-1) + fibo($num-2);

}
echo "<br>";
$num = 18;
echo fibo($num);

?>