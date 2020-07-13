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