<?php 
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    die();
}

$email= $_POST["email"];
$password= $_POST["password"];


try {
    require "db.inc.php";
    require "login_model.inc.php";
    require "login_contr.inc.php";
    

    // ERRORS HANDLER
    $errors = [];

    if (isEmpty($email, $password)) {
        $errors["empty_input"] = "Empty input";
    }


    $result = get_user($pdo, $email);

      
    if (isEmailWrong($result) || isPasswordWrong($password, $result["pswrd"])) {
        $errors["login_incorrect"] = "email o Password Sbagliati";
    }


    // 
    require "config_session.inc.php";
    if ($errors) {
        $_SESSION["errors_login"] = $errors;
        header("Location: ../index.php");
        die("Errore");
    }

    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $UserId;
    session_id($sessionId);
    
    $_SESSION["user_id"] = $result["id"];
    $_SESSION["user_email"] = htmlspecialchars($result["email"]);
    
    
    $_SESSION["last_regeneration"] = time();


    header("Location: ../index.php?login=success");

    $pdo = null;
    $stmt = null;

    die();

} catch (PDOException $e) {
    die("Query failed" . $e);
}