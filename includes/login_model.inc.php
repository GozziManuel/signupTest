<?php
declare(strict_types=1);

function get_user($pdo, $email){
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    return $result;
}

?>