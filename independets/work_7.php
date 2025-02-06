<?php
function stringLength($string) {
    $length = 0;
    foreach (str_split($string) as $char) {
        $length++;
    }
    return $length;
}
?>