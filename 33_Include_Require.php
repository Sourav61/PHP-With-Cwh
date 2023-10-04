<?php

include '_dbConnect.php';
// require '_dbConnect.php';


$sql = "Select * from trip";
$result = mysqli_query($conn, $sql);

$num_rows = mysqli_num_rows($result);
echo $num_rows;
echo "<br/>";

while ($row = mysqli_fetch_assoc($result)) {
    echo var_dump($row);
    echo "<br/>";
}
?>