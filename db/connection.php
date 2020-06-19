<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "snt";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    echo "Connection failed: ";
}
else "done";

?>