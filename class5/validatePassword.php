<?php


function validatePassword($pass){
    if(strlen($pass)< 8) echo " Must contain at least 8 characters";
    else if(!preg_match('/[A-Z]/', $pass)) echo "Must contain at least one upperCharacter";
    else if(!preg_match('/\d/', $pass)) echo "Must contain atleast one number";
    else if(!preg_match('/[\W_]/', $pass)) echo "Must contain a special character";
    else echo"password is set";
}

$pass = "Abhshek12$3";

validatePassword($pass);


?>