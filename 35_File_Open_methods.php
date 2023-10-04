<?php

$fptr = fopen("testFile.txt", "r");

// echo $fptr;

$content = fread($fptr, filesize("testFile.txt"));
fclose($fptr);
echo $content;

?>