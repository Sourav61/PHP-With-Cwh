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

$sql = "Select * from trip";
$result = mysqli_query($conn, $sql);

$num_rows = mysqli_num_rows($result);
echo $num_rows;
echo "<br/>";

if ($num_rows > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br/>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo var_dump($row);
        echo "<br/>";
    }

}

// if ($result) {
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//                     <strong>Success</strong> Your entry was sent successfully.
//                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//                 </div>';
// } else {
//     echo mysqli_error($conn);
//     // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//     //     <strong>Error!</strong> We are facing some technical issues and your entry was not submitted successfully
//     //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//     // </div>';
// }

?>