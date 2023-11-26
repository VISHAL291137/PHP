<?php
function generateRandomPassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    $charLen = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charLen)];
    }

    return $password;
}

$password = generateRandomPassword(15);
echo $password;
?>
