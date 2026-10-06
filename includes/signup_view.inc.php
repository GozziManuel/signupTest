<?php 


function checkSignupErrors(){
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";
        foreach($errors as $error){
            echo "<p>" . $error . "</p>";
        }

        unset($_SESSION["errors_signup"]);
    }
    else if (isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo "<br>";
        echo "<p> Success Signup </p>";
    }
}