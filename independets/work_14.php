<?php
function formatDate($date) {
    $dateArray = explode("-", $date);
    return "{$dateArray[2]}/{$dateArray[1]}/{$dateArray[0]}";
}
?>