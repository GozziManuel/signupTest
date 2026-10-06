<?php
declare(strict_types=1);


// empty States Validator
function isEmpty($username, $email, $password){
if (empty($username) || empty($email) || empty($password)) {
    return true;
}
else 
    return false;
}


// Email Validator
function isEmailCorrect($email){
if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    return true;
}
else 
    return false;
}


function isUsernameTaken($pdo, $username){
    if (get_username($pdo, $username)) {
        return true;
    }
    else 
        return false;

}


?>