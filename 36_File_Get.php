<?php

$fptr = fopen("testFile.txt", "r");
// echo fgets($fptr);

// while ($a = fgets($fptr)) {
//     echo $a;
// }

// echo fgetc($fptr);

// while ($a = fgetc($fptr)) {
//     echo $a;
// }

while ($a = fgetc($fptr)) {
    echo $a;
    if ($a == 'f') {
        break;
    }
}
fclose($fptr);

?>