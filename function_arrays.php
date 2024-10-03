<?php
include 'variables.php';

function greet() {
    $arr = ["fj", "ryan", "apri", "levin", "alvin"];
    foreach ($arr as $a) {
        echo "Hello, $a" . "<br>";
    }
}

greet();