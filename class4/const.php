<?php
    define("ATUL", "AUTO");

    define("courses",["PHP","HTML","CSS"]);

    for($i=0;$i<3;$i++){
        echo courses[$i]." ";
    }
    
    const wishes = "good day";
    echo ATUL." ". wishes;

    echo "<br>";

    function test(){
        define("inside","inside Function");
    }

    test();


    // const is global scope

    const a = 23;

    define("b", 46);

    function add($a, $b){
        $sum = $a + $b;
        echo "Sum is ".$sum;
    }
    
    add(a, b);

    
    define("COLORS",["RED"=>"#FF0000","GREEN"=>"#00FF00", "BLUE"=>"#0000FF"]);

    echo "Color 1 ". COLORS["RED"] . " \n";
    echo COLORS["BLUE"],"\n";


  



    echo "<br>";

    $x = null;
    $y = null;
    $z = 23;
    $u = null;

   $result =  $x ?? $y ?? $z ?? $u;
   echo $result;
?>