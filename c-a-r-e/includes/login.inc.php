<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $POST['username'];
        $pwd = $POST['pwd'];
    
        try {

            require_once 'dbh.inc.php';
            require_once 'loginModel.inc.php';
            require_once 'loginContr.inc.php';

            // ERROR HANDLERS
            $errors = [];

            if (isInputEmpty($pwd, $email)) {
                $errors['emptyInput'] = 'Fill in all fields!';
            }
            
            $result = getUser($pdo, $email);
        
            if (isEmailWrong($result)) {
                $errors['login_incorrect'] = 'Incorrect login info!';
            }
            if (!isEmailWrong($result) && isPasswordWrong($pwd, $result['pwd'])) {
                $errors['login_incorrect'] = 'Incorrect login info!';
            }

            require_once 'config.php';

            if ($errors) {
                $_SESSION['errorsLogin'] = $errors;

                header("Location: ../index.php");
                die();
            }

            $_SESSION['user_id'] = $result['id'];
            $_SESSION['user_username'] = htmlspecialchars($result['username']);

            $_SESSION['last_regeneration'] = time();
            
            header('location: ../index.php');
            $pdo = null;
            $statement = null;

            die();
        } catch (PDOException $e) {

            die('Query failed: ' . $e->getMessage());
        }
    }else{

        header('location: ../index.php');
        die();
    }