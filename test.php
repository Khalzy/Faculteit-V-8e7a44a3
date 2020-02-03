
<?php

$v = readline("Van welk getal wil je de faculiteit?");
$r = 1;

while ($i < $v) {
    $i++;
    $r *= ($i);
}
echo ("The factorial of " . $i . " " . $question . "= " . $r . "\n");
