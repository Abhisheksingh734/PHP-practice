<?php

const pt = 0;
while(true){
    global $pt;
    $n = rand(0,6);
    if($n==6) {
        echo "Game is over";
        break;
    };

    if($n%2!=0){
        $pt=$pt + 5;
    }

    echo "You rolled ".$n. ", points are -> ".$pt."<br>";
}
?>