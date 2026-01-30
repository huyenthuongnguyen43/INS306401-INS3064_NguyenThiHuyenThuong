<?php
function isAdult(?int $age): bool {
    return $age !== null && $age >= 18;
}

var_export(isAdult(null));
?>
