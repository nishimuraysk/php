<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";
$other = "数字";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 === 0 and $i % 5 === 0) {
        echo "$i = " . $FizzBuzz . "<br />";
    } elseif ($i % 3 === 0) {
        echo "$i = " . $Fizz . "<br />";
    } elseif ($i % 5 === 0) {
        echo "$i = " . $Buzz . "<br />";
    } else {
        echo "$i = " . $other . "<br />";
    }
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "⚫︎";
    }
    echo "<br />";
}
