<?php
declare(strict_types=1);


// empty States Validator
function isEmailWrong($result){
if (!$result) {
    return true;
}
else 
    return false;
}

function isPasswordWrong($password, $hashedPSWRD){
if (!password_verify($password, $hashedPSWRD)) {
    return true;
}
else 
    return false;
}


function isEmpty($email, $password){
if ( empty($email) || empty($password)) {
    return true;
}
else 
    return false;
}

?>