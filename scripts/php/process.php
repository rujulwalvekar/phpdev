<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form 2</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="endcss.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    $host     = "127.0.0.1";
    $user     = "rujul";
    $password = "rujul.w";
    $database = "rujul";
    // echo "LALALALA";
    $mysqli   = mysqli_connect($host, $user, $password, $database);
    if ($mysqli) {
        echo "connected";
    }
    if (mysqli_connect_errno($mysqli)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // $maths = $mysqli->real_escape_string($_POST['maths']);
    $maths = $_POST['maths'];
    $phy = $_POST['phy'];
    $chem = $_POST['chem'];
    $bio = $_POST['bio'];
    $marathi = $_POST['marathi'];
    $english = $_POST['english'];
    $fid = $_SESSION["last_id"];
    $query = "INSERT INTO marks ( maths, phy, chem, bio, marathi, english,fid)
            VALUES ('{$maths}','{$phy}','{$chem}','{$bio}','{$marathi}','{$english}','{$fid}')";

    if (mysqli_query($mysqli, $query)) {
        echo "New record created successfull";
    } else {
        echo ("Error: " . $query . "<br>" . mysqli_error($mysqli));
    }
    

    $name =        $_SESSION["name"]    ; 
    $class =$_SESSION["class"]    ;
    $roll_no =$_SESSION["roll_no"]  ;
    $maths =$_SESSION["maths"]    ;
    $physics =$_SESSION["physics"]  ;
    $chemistry =$_SESSION["chemistry"];
    $biology =$_SESSION["biology"]  ;
    $marathi =$_SESSION["marathi"]  ;
    $english =$_SESSION["english"]  ;

    $total_t = $maths + $phy + $chem + $bio + $marathi + $english;
    $total_o = 600;
    // $name;
    // $class;
    // $roll_no;
    // $maths;
    // $physics;
    // $chemistry;
    // $biology;
    // $marathi;
    // $english;
    // echo "Name:{$row['name']}  <br> " .
    //     "Class: {$row['class']} <br> " .
    //     "Roll: {$row['roll_no']} <br> " .
    //     "Maths: {$row['maths']} <br> " .
    //     "Physics: {$row['phy']} <br> " .
    //     "Chemistry: {$row['chem']} <br> " .
    //     "Biology: {$row['bio']} <br> " .
    //     "Marathi: {$row['marathi']} <br> " .
    //     "English: {$row['english']} <br> " .
    //     "--------------------------------<br>";



    // $sql = 'SELECT student.name, student.class,student.roll_no, marks.maths,marks.phy,marks.chem,marks.bio,marks.marathi,marks.english
    //    FROM student student, marks marks
    //    WHERE student.id = marks.fid';

    $mysqli->close();
    ?>
    <table>
        <thead>
            <tr>
                <td colspan="1"><?php echo $roll_no ?></td>
                <td colspan="2"><?php echo $name ?></td>
                <td colspan="3"><?php echo $class ?></td>
                <!-- <td rowspan="2"> Grade </td> -->
            </tr>
            <tr>

                <td colspan="1">Code </td>
                <td colspan="2">Subject </td>
                <td colspan="2"> Theory </td>
                <td> Out of </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1 </td>
                <td colspan="2">Maths </td>
                <td colspan="2"><?php echo $maths ?></td>
                <td> 100 </td>
                <!-- <td> A </td> -->
            </tr>
            <tr>
                <td>2 </td>
                <td colspan="2">Physics </td>
                <td colspan="2"><?php echo $phy ?></td>
                <td> 100 </td>
                <!-- <td> A </td> -->
            </tr>
            <tr>
                <td>3 </td>
                <td colspan="2">Chemistry</td>
                <td colspan="2"><?php echo $chem ?></td>
                <td> 100 </td>
                <!-- <td> A </td> -->
            </tr>
            <tr>
                <td>4 </td>
                <td colspan="2">Biology </td>
                <td colspan="2"><?php echo $bio ?></td>
                <td> 100 </td>
                <!-- <td> A </td> -->
            </tr>
            <tr>
                <td>5 </td>
                <td colspan="2">Marathi </td>
                <td colspan="2"><?php echo $marathi ?></td>
                <td> 100 </td>
                <!-- <td> A </td>> -->
            </tr>
            <tr>
                <td>6 </td>
                <td colspan="2">English </td>
                <td colspan="2"><?php echo $english ?></td>
                <td> 100 </td>
                <!-- <td> A </td>> -->
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="footer">Total</td>
                <td colspan="2"><?php echo $total_t ?></td>
                <td colspan="2"><?php echo $total_o ?></td>
            </tr>
            <tr>
                <td colspan="3" class="footer">Percentage</td>
                <td colspan="2">90% </td>
                <td colspan="2">Pass/Fail </td>
            </tr>
    </table>
</body>

</html>

<!-- SET FOREIGN_KEY_CHECKS = 0; 
TRUNCATE table student;
TRUNCATE table marks; 
SET FOREIGN_KEY_CHECKS = 1; -->

<!-- ALTER TABLE marks
ALTER fid SET DEFAULT 0;

ALTER id SET DEFAULT 0; -->