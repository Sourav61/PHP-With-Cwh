<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
} else {
    echo "Connection successful";
}
$sql = "Create database dbSp1";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The database was created successfully";
} else {
    echo "The database was not created successfully ---> " . mysqli_error($conn);
}

// echo "The reuslt is : " . var_dump($result);
// echo "<br/>";

?>