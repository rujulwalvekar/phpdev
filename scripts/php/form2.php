<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

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

    <div class="top-container">
        <h1>Enter Student Details</h1>
    </div>
    <div class="middle-container">
        <form action="process.php" method="POST">
            <h3>Enter Your Marks</h3>
            <label for="maths_marks">Maths:</label><br>
            <input type="number" id="maths_marks" name="maths" required><br>
            <label for="physics_marks">Physics:</label><br>
            <input type="number" id="physics_marks" name="phy"required><br>
            <label for="chem_marks">Chemistry:</label><br>
            <input type="number" id="chem_marks" name="chem"required><br>
            <label for="bio_marks">Biology:</label><br>
            <input type="number" id="bio_marks" name="bio"required><br>
            <label for="marathi_marks">Marathi:</label><br>
            <input type="number" id="marathi_marks" name="marathi"required><br>
            <label for="english_marks">English:</label><br>
            <input type="number" id="english_marks" name="english"required><br>
            <input type="submit" value="Submit"> <br>
        </form>
    </div>


</body>

</html>