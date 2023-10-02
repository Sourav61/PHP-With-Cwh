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

$sql = "CREATE TABLE `trip` (`Sno` INT(11) NOT NULL AUTO_INCREMENT , `Location` VARCHAR(11) NOT NULL , `Price` INT(11) NOT NULL , PRIMARY KEY (`Sno`));
";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The database was created successfully";
} else {
    echo "The database was not created successfully ---> " . mysqli_error($conn);
}

// echo "The reuslt is : " . var_dump($result);
// echo "<br/>";

?>