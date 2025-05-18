<?php

$real = 1234;
$predict = 3456;

$each_real = str_split($real);
$each_predict = str_split($predict);

$death = 0;
$injury = 0;

// Exact matches (correct digit, correct position)
for ($i = 0; $i < 4; $i++) {
    if ($each_real[$i] === $each_predict[$i]) {
        $death++;
    }
}

// Partial matches (correct digit, wrong position)
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($i !== $j && $each_real[$i] === $each_predict[$j]) {
            $injury++;
            break;
        }
    }
}

echo $death . '-' . $injury;

?>
