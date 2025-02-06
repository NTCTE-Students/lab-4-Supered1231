<?php
function isPalindrome($string) {
    $cleaned = preg_replace("/[^A-Za-z0-9]/", '', strtolower($string));
    return $cleaned === strrev($cleaned);
}
?>
