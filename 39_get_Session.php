<?php

session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] = 'Harry';

    echo "<br>";
    echo "Your favourite category is " . $_SESSION['favCat'] = 'Books';
} else {
    echo "Please login to continue";
}

?>