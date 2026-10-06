<?php 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    die();
}

$username= $_POST["username"];
$email= $_POST["email"];
$password= $_POST["password"];

try {
    require "db.inc.php";
    require "signup_model.inc.php";
    require "signup_contr.inc.php";

    // ERRORS HANDLER
    $errors = [];

    if (isEmpty($username, $email, $password)) {
        $errors["empty_input"] = "Empty input";
    }
    if (isEmailCorrect($email)) {
        $errors["invalid_email"] = "Email invalida";
        
    }
    if (isUsernameTaken($pdo, $username)) {
        $errors["Username_taken"] = "Username già in uso";
        
    }
    if (isEmailTaken($pdo, $email)) {
        $errors["email_taken"] = "Email già in uso";   
    }

    require "config_session.inc.php";
    if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        header("Location: ../index.php");
        die("Errore");
    }

} catch (PDOException $e) {
    die("Query failed" . $e);
}
?>