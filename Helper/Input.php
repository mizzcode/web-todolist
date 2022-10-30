<?php

function input(string $info) {
    echo "$info :";
    $result = fgets(STDIN);
    return trim($result);
};