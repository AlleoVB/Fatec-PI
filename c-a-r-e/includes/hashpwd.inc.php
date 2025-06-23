<?php

$pwdSignup = "Krossing";
$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

/* --- */

$pwdLogin = "Krossing";

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are NOT the same!";
}
