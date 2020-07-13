<?php
    session_start();
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

    $sql = 'SELECT student.name as name, student.class as class,student.roll_no as roll_no ,marks.maths as maths, marks.phy,marks.chem,marks.bio,marks.marathi,marks.english  FROM student JOIN marks on student.id=marks.fid where student.id=?';
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
        $name    = $row['name'];
        $class = $row['class'];
        $roll_no = $row['roll_no'];
        $maths = $row['maths'];
        $phy = $row['phy'];
        $chem = $row['chem'];
        $bio = $row['bio'];
        $marathi = $row['marathi'];
        $english = $row['english'];
    }
    // echo $name;echo "     ";
    // echo $class;"     ";
    // echo $roll_no;"     ";
    // echo $maths;"     ";
    // echo $phy;"     ";
    // echo $chem;"     ";
    // echo $bio;"     ";
    // echo $marathi;"     ";
    // echo $english;"     ";
    // echo $total_t;"     ";
    $total_t = $maths + $phy + $chem + $bio + $marathi + $english;
    $total_o = 600;
    $mysqli->close();
    ?>