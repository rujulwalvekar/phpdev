<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Collection</title>
    <link rel="stylesheet" href="">
</head>
 <?php
    echo '<link href="/scripts/css/style.css" rel="stylesheet" type="text/css" />';
    ?>
<body>
    <!-- <form action="#"target="#">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe">
    </form> -->
    <div class="top-container">
        <h1>Enter Student Details</h1>
    </div>
    <div class="middle-container">
        <!-- Chnage to post -->
        <form action="2.html" method="GET">
            <!-- <label for="College_Name">Name of College</label><br>
            <textarea rows="1" cols="50" name="clg_name"></textarea> -->

            <!-- 
                Make fields required
             -->
            <h3>Enter Your Marks</h3>
            <label for="maths_marks">Maths:</label><br>
            <input type="number" id="maths_marks" name="maths" required><br>
            <label for="physics_marks">Physics:</label><br>
            <input type="number" id="physics_marks" name="phy"><br>
            <label for="chem_marks">Chemistry:</label><br>
            <input type="number" id="chem_marks" name="chem"><br>
            <label for="bio_marks">Biology:</label><br>
            <input type="number" id="bio_marks" name="bio"><br>
            <label for="marathi_marks">Marathi:</label><br>
            <input type="number"id="marathi_marks" name="marathi"><br>
            <label for="english_marks">English:</label><br>
            <input type="number" id="english_marks" name="english"><br>
            <input type="submit" value="Submit"> <br>
        </form>
    </div>


</body>

</html>