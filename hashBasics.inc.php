<?php

$sensitiveData = "Krossing";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

/* --- */

$sensitiveData = "Krossing";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
    echo "The data are the same!";
} else {
    echo "The data are NOT the same!";
}
