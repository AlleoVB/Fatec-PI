<?php

    declare(strict_types=1);

function getUsername(object $pdo, string $username)  {
    
    $query = 'SELECT username FROM users WHERE username = :username;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username, $username");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail(object $pdo, string $email)  {
    
    $query = 'SELECT email FROM users WHERE email = :email;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email, $email");
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function setUser(object $pdo, string $pwd, string $username, string $email) {

    $query = 'INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username, $username");
    $stmt->bindParam(":pwd, $pwd");
    $stmt->bindParam(":email, $email");
    $stmt->execute();

    
}
