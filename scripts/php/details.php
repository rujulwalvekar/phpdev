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
    $fid = $_SESSION["last_id"];
    // echo "$fid";
    $mysqli   = mysqli_connect($host, $user, $password, $database);
    if ($mysqli) {
        echo "connected<br>";
    }

    if (mysqli_connect_errno($mysqli)) {
        echo "Failed to connect to MySQL=" . mysqli_connect_error();
    }
    // $sql = ' SELECT student.name, student.class,student.roll_no FROM student JOIN marks
    // on student.id=marks.fid
    // where student.id=$fid}';
    // $nfid=$fid;
    $sql = 'SELECT student.name as name, student.class as class,student.roll_no as roll_no ,marks.maths as maths, marks.phy,marks.chem,marks.bio,marks.marathi,marks.english FROM student JOIN marks on student.id=marks.fid where student.id=?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $fid);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    // $user = $result->fetch_assoc(); // fetch data   
    // mysql_select_db('TUTORIALS');
    // $retval = $mysqli->query($sql);

    if (!$result) {
        die('Could not get data=' . $sql . "<br>"  . mysqli_error($mysqli));
    }
    while ($row = $result->fetch_assoc()) {
        $_SESSION["name"]     =$row['name'];
        $_SESSION["class"]    =$row['class'];
        $_SESSION["roll_no"]  =$row['roll_no'];
        $_SESSION["maths"]    =$row['maths'];
        $_SESSION["physics"]  =$row['phy'];
        $_SESSION["chemistry"]=$row['chem'];
        $_SESSION["biology"]  =$row['bio'];
        $_SESSION["marathi"]  =$row['marathi'];
        $_SESSION["english"]  =$row['english'];
    }
    echo "Fetched data successfully\n";
    // $_SESSION["name"]             = "$name";
    // $_SESSION["class"]            = "$class";
    // $_SESSION["roll_no"]          = "$roll_no";
    // $_SESSION["maths"]            = "$maths";
    // $_SESSION["physics"]          = "$physics";
    // $_SESSION["chemistry"]        = "$chemistry";
    // $_SESSION["biology"]          = "$biology";
    // $_SESSION["marathi"]          = "$marathi";
    // $_SESSION["english"]          = "$english";


    $name =        $_SESSION["name"]    ; 
    $class =$_SESSION["class"]    ;
    $roll_no =$_SESSION["roll_no"]  ;
    $maths =$_SESSION["maths"]    ;
    $physics =$_SESSION["physics"]  ;
    $chemistry =$_SESSION["chemistry"];
    $biology =$_SESSION["biology"]  ;
    $marathi =$_SESSION["marathi"]  ;
    $english =$_SESSION["english"]  ;
    $mysqli->close();
    ?>