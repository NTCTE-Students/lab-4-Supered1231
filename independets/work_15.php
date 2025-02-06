<?php
function secondLargest($array) {
    $uniqueArray = array_unique($array);
    sort($uniqueArray);
    return isset($uniqueArray[count($uniqueArray) - 2]) ? $uniqueArray[count($uniqueArray) - 2] : null;
}
?>