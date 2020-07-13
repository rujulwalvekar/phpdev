<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Collection</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="top-container">
        <h1>Enter Student Details</h1>
    </div>
    <div class="middle-container">
        <form action="form2.php" method="POST">
            <label for="roll_no">Roll Number:</label><br>
            <input type="number" id="roll_no" name="roll_no"required><br>
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="name"required><br>
            <label for="class">Class:</label><br>
            <input type="text" id="class" name="class"required><br>
            <label for="addr">Address</label><br>
            <textarea name="address"required></textarea><br><br>
            <input type="submit" value="Next Page"> <br>
        </form>
    </div>
</body>

</html>