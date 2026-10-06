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


function set_user($pdo, $email, $username, $password){
    $query = "INSERT INTO users (email, pswrd, username) VALUES (?, ?, ?)";
    

    // COST FOR SECURITY
    $options = [
        "cost"=> 12
    ];

    // HASHING PASSWORD
    $hashedPSWRD = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt = $pdo->prepare($query);


    $stmt->execute([$email, $hashedPSWRD, $username]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    return $result;
}

?>