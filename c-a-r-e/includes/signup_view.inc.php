<?php

    declare(strict_types=1);

    function signupInputs()  {
        //html

        if (isset($_SESSION['signupData']['username']) && !isset($_SESSION['errorSignup']['username_taken'])) {
            /* html */;
        } else {
            /* html */;
        }

        echo /* html */;

        if (isset($_SESSION['signupData']['username']) && !isset($_SESSION['errorSignup']['username_taken'])) {
            /* html */;
        } else {
            /* html */;
        }
    }

    function checkSignupErrors()  {
        
        if (isset($_SESSION['errorsSignup'])) {
            $errors = $_SESSION['errorsSignup'];

            echo "<br>";
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }

            unset($_SESSION['errorsSignup']);
        }
    }
