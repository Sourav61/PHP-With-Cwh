<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsp";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
} else {
    echo "Connection successful";
}

$name = "Vikram";
$price = "10000000";

$sql = "INSERT INTO `trip` (`Sno`, `Location`, `Price`) VALUES ('1', '$name', '$price')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The record was inserted successfully";
} else {
    echo "The record was not inserted successfully ---> " . mysqli_error($conn);
}

?>