<?php 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    die();
}

$username= $_POST["username"];
$email= $_POST["email"];
$password= $_POST["password"];

try {
    require("db.inc.php");
    require("signup_model.inc.php");
    require("signup_contr.inc.php");

    if (isEmpty($username, $email, $password)) {
        
    }
    if (isEmailCorrect($email)) {
        
    }
    if (isUsernameTaken( $username)) {
        
    }
} catch (PDOException $e) {
    die("Query failed" . $e);
}
?>