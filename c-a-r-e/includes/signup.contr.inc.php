<?php

    declare(strict_types=1);

    function isInputEmpty(string $username, string $pwd, string $email) : bool {

        if (empty($username) || empty($pwd) || empty($email)) {
            return true;
        } else {
            return false;
        }
    }

    function isEmailValid(string $email) : bool {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    function isUsernameTaken(object $pdo, string $username) : bool {

        if (getUsername($pdo, $username)) {
            return true;
        } else {
            return false;
        }
    }

    function isEmailRegistered(object $pdo, string $email) : bool {

        if (getEmail($pdo, $email)) {
            return true;
        } else {
            return false;
        }
    }

    function createUser(object $pdo, string $pwd, string $username, string $email) {
        setUser($pdo, $pwd, $username, $email);
    }
