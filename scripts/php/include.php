<?php
session_start();
error_reporting(E_ALL);
$host     = "127.0.0.1";
$user     = "rujul";
$password = "rujul.w";
$database = "rujul";
$mysqli   = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno($mysqli)) {

    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];
$roll_no = $_POST['roll_no'];
// $field5 = $_POST['field5']);

$query = "INSERT INTO student (name,class,address,roll_no)
    VALUES ('{$name}','{$class}','{$address}','{$roll_no}')";

// $mysqli->query($query);
if ($mysqli->query($query) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}
$mysqli->close();
?>

<?php
// Set session variables
$_SESSION["last_id"] = "$last_id";

echo "Session variables are set.";
?>