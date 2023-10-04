<?php

$fptr = fopen("myfile.txt", "w");
fwrite($fptr, "This is 2nd testing text file\n");
fwrite($fptr, "This is some content\n");

$fptr = fopen("myfile.txt", "a");
fwrite($fptr, "This is another content\n");

?>