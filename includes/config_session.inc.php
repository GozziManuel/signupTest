<?php 

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);


session_set_cookie_params([
"lifetime" => 1800,
"domain" => "localhost",
"path" => "/",
"secure" => true,
"httponly" => true
]);


session_start();

if (isset($_SESSION["user_id"])) {
if (!isset($_SESSION["last_regeneration"])) {
    sessionIDregeneratorLogged();
} else{
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        sessionIDregeneratorLogged();
    }
}
    
}
else{
if (!isset($_SESSION["last_regeneration"])) {
    sessionIDregenerator();
} else{
    $interval = 60 * 30;
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        sessionIDregenerator();
    }
}}

function sessionIDregenerator() 
{
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
 
}

function sessionIDregeneratorLogged() 
{
    session_regenerate_id(true);

    $UserId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $UserId;
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();
 
}
?>
