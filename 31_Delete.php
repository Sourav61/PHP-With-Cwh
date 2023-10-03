<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbsp";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
} else {
    echo "Connection successful<br/>";
}

$sql = "Delete from trip where `price` > 20000 Limit 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br/> Number of affected rows: $aff <br/>";

?>