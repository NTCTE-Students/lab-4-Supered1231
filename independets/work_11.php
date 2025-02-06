<?php
function factorial($number) {
    if ($number < 0) return null;
    $result = 1;
    for ($i = 2; $i <= $number; $i++) {
        $result = $i;
    }
    return $result;
}
?>