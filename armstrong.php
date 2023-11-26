<?php
function isArmstrong($number) {
    $numDigits = strlen((string)$number);
    $temp = $number;
    $sum = 0;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int)($temp / 10);
    }
    
    return $sum === $number;
}

$number = 153; // Change this to the number you want to check

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>