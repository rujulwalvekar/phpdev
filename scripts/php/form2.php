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

    <?php include 'include.php'; ?>
    <div class="top-container">
        <h1>Enter Student Details</h1>
    </div>
    <div class="middle-container">
        <form action="process.php" method="POST">
            <h3>Enter Your Marks</h3>
            <label for="maths_marks">Maths:</label><br>
            <input type="number" id="maths_marks" name="maths" required><br>
            <label for="physics_marks">Physics:</label><br>
            <input type="number" id="physics_marks" name="phy" required><br>
            <label for="chem_marks">Chemistry:</label><br>
            <input type="number" id="chem_marks" name="chem" required><br>
            <label for="bio_marks">Biology:</label><br>
            <input type="number" id="bio_marks" name="bio" required><br>
            <label for="marathi_marks">Marathi:</label><br>
            <input type="number" id="marathi_marks" name="marathi" required><br>
            <label for="english_marks">English:</label><br>
            <input type="number" id="english_marks" name="english" required><br>
            <input type="submit" value="Submit"> <br>
        </form>
    </div>
</body>

</html>