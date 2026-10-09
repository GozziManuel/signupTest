<?php 

function outputInfo(){

if (isset($_SESSION["user_id"])) {
    echo "You are Logged in as " . $_SESSION["user_email"];
}
else{
    echo "You are not logged in";
}
}

function checkLoginErrors(){
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";
        foreach($errors as $error){
            echo "<p>" . $error . "</p>";
        }

        unset($_SESSION["errors_login"]);
    }
    else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        echo "<br>";
        echo "<p> Success Login </p>";
    }
}