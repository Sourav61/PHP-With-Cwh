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

$sql = "Select * from trip where `price` >= 6000 order by `price`";
$result = mysqli_query($conn, $sql);

$num_rows = mysqli_num_rows($result);
echo $num_rows;
echo "<br/>";
$no = 1;

if ($num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $no . ". Hello, Welcome to " . $row['Location'] . ", you should have " . $row['Price'];
        echo "<br/>";
        $no += 1;
    }
}

$sql = "Update `trip` set `Location` = 'Romania' where `sno` = 2";
$result = mysqli_query($conn, $sql);

echo $result;
echo "<br/>";
$aff = mysqli_affected_rows($conn);
echo "<br/> Number of affected rows: $aff <br/>";

if ($result) {
    echo "Record updated successfully";
} else {
    echo "Record not updated successfully";
}

?>