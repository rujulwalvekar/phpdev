<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="endcss1.css">


</head>

<body>

    <button class="tablink" onclick="openPage('Database',this,'papayawhip')" id="defaultOpen">Database</button>
    <button class="tablink" onclick="openPage('Search_for_Students',this,'peachpuff')">Search for Students</button>
    <button class="tablink" onclick="openPage('Delete_Records',this, 'paleturquoise')">Delete Records</button>

    <div id="Database" class="tabcontent">
        <?php
        $username = "rujul";
        $password = "rujul.w";
        $database = "rujul";
        $mysqli = new mysqli("localhost", $username, $password, $database);
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

        // if ($result = $mysqli->query($query)) {
        //     while ($row = $result->fetch_assoc()) {
        //         $field1name = $row["id"];
        //         $field2name = $row["name"];
        //         $field3name = $row["class"];
        //         $field4name = $row["address"];
        // $field5name = $row[""];

       echo'<tr> 
       <td>' . $name   . '</td> 
       <td>' . $class                   . '</td> 
       <td>' . $roll_no                   . '</td> 
       <td>' . $maths                   . '</td> 
       <td>' . $phy                   . '</td> 
       <td>' . $chem                   . '</td> 
       <td>' . $bio                   . '</td> 
       <td>' . $marathi                   . '</td> 
       <td>' . $english                   . '</td> 
       <td>' . $total_t                   . '</td> 
              </tr>';       
        //     }
        //     $result->free();
        // }
        ?>
    </div>
    <div id="Search_for_Students" class="tabcontent">
        <h2>Hobbies</h2>
        <ol>
            <!-- Default OL is 1 -->
            <!-- Other Attributes include start="1",width,height,noshade,color -->
            <li>Watching Sunsets</li>
            <li>Drinking Coffee</li>
            <li>Playing Tennis</li>
        </ol>
    </div>
    <div id="Delete_Records" class="tabcontent">
        <table>
            <hr>
            <thead>
                <th>
                    <h3>My Skills</h3>
                </th>
            </thead>
            <table cellspacing=20>
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td>Python</td>
                                <td>&#11088 &#11088 &#11088 &#11088 &#11088 &#11088 </td>
                            </tr>
                            <tr>
                                <td>Machine Learning</td>
                                <td>&#11088 &#11088 &#11088 </td>
                            </tr>
                            <tr>
                                <td>Data Science</td>
                                <td>&#11088 &#11088 &#11088</td>
                            </tr>
                            <tr>
                                <td>Artificial Intelligence</td>
                                <td>&#11088 &#11088 </td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr>
                                <td>JavaScript</td>
                                <td>&#11088 &#11088</td>
                            </tr>
                            <tr>
                                <td>HTML</td>
                                <td>&#11088 &#11088 &#11088 &#11088 &#11088 &#11088 </td>
                            </tr>
                            <tr>
                                <td>CSS</td>
                                <td>&#11088 &#11088 &#11088</td>
                            </tr>
                            <tr>
                                <td>Sleeping</td>
                                <td>&#11088 &#11088 &#11088 &#11088</td>
                            </tr>
                        </table>
                    </td>
            </table>
    </div>
    <script>
        // Hide all elements with class="tabcontent" by default */
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(pageName).style.display = "block";

            // Add the specific color to the button used to open the tab content
            elmnt.style.backgroundColor = color;
        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="endcss.css">
    </head>

<body>
    <?php
    $username = "rujul";
    $password = "rujul.w";
    $database = "rujul";
    $mysqli = new mysqli("localhost", $username, $password, $database);
    $query = "SELECT * FROM student";


    echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Value1</font> </td> 
          <td> <font face="Arial">Value2</font> </td> 
          <td> <font face="Arial">Value3</font> </td> 
          <td> <font face="Arial">Value4</font> </td> 

      </tr>';

    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["id"];
            $field2name = $row["name"];
            $field3name = $row["class"];
            $field4name = $row["address"];
            // $field5name = $row[""];

            echo '<tr> 
                  <td>' . $field1name . '</td> 
                  <td>' . $field2name . '</td> 
                  <td>' . $field3name . '</td> 
                  <td>' . $field4name . '</td> 
              </tr>';
        }
        $result->free();
    }
    ?>
</body>

</html>