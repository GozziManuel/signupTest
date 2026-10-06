<?php
declare(strict_types=1);

function get_username($pdo, $username){
    $query = "SELECT username FROM users WHERE username = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    return $result;
}

function get_email($pdo, $email){
    $query = "SELECT email FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    return $result;
}

?>