<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="endcss1.css">


</head>

<body>

        <?php
        session_start();
        $username = "rujul";
        $password = "rujul.w";
        $database = "rujul";
        $mysqli = new mysqli("localhost", $username, $password, $database);
        echo $fid;
        $sql = 'SELECT student.name as name, 
        student.class as class,student.roll_no as roll_no ,
        marks.maths as maths, marks.phy,marks.chem,marks.bio,
        marks.marathi,marks.english  
        FROM student JOIN marks on student.id=marks.fid ';
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        // $user = $result->fetch_assoc(); // fetch data   
        // mysql_select_db('TUTORIALS');
        // $retval = $mysqli->query($sql);
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
            <tr> 
                <td> <font face="Arial">Value1</font> </td> 
                <td> <font face="Arial">Value2</font> </td> 
                <td> <font face="Arial">Value3</font> </td> 
                <td> <font face="Arial">Value4</font> </td> 
                <td> <font face="Arial">Value5</font> </td> 
                <td> <font face="Arial">Value6</font> </td> 
                <td> <font face="Arial">Value7</font> </td> 
                <td> <font face="Arial">Value8</font> </td> 
                <td> <font face="Arial">Value9</font> </td>
      
            </tr>';
            

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
            
      
            echo'<tr> 
            <td>' . $name   . '</td> 
            <td>' . $class . '</td> 
            <td>' . $roll_no . '</td> 
            <td>' . $maths. '</td> 
            <td>' . $phy. '</td> 
            <td>' . $chem . '</td> 
            <td>' . $bio . '</td> 
            <td>' . $marathi . '</td> 
            <td>' . $english . '</td> 
            <td>' . $total_t. '</td> 
                   </tr>';      
        }


        // if ($result = $mysqli->query($query)) {
        //     while ($row = $result->fetch_assoc()) {
        //         $field1name = $row["id"];
        //         $field2name = $row["name"];
        //         $field3name = $row["class"];
        //         $field4name = $row["address"];
        // $field5name = $row[""];

       
        //     }
        //     $result->free();
        // }
        ?>
    </div>
    
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="endcss.css">
    </head>

<body>

</body>

</html> -->