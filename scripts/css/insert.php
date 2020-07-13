<?php
// $username = "rujul";
// $password = "rujul.w";
// $database = "rujul";
 
// $mysqli = new mysqli("localhost", $username, $password, $database);
error_reporting(E_ALL);
$host     = "127.0.0.1";
$user     = "rujul";
$password = "rujul.w";
$database = "rujul";
// echo "LALALALA";
$mysqli   = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno($mysqli)) {
   
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

 
// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.
 
$id = $mysqli->real_escape_string($_POST['id']);
$name = $mysqli->real_escape_string($_POST['name']);
$class = $mysqli->real_escape_string($_POST['class']);
$address = $mysqli->real_escape_string($_POST['address']);
// $field5 = $mysqli->real_escape_string($_POST['field5']);
 
$query = "INSERT INTO student (id, name, class, address)
            VALUES ('{$id}','{$name}','{$class}','{$address}')";
 
$mysqli->query($query);

$query = "SELECT * FROM student";
 
if ($result = $mysqli->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["class"];
        $field4name = $row["address"];
        // $field5name = $row["col5"];
    }
    // echo '<b>'.$field1name.$field2name.'</b><br />';
    echo $field1name.'<br />';
    echo $field2name.'<br />';
    echo $field3name.'<br />';
    echo $field4name.'<br />';
    // echo $field5name;
 
    /* free result set */
    $result->free();
}
$mysqli->close();
?>