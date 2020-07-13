<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="heading"> Marksheet </h1>
    
    
<form action="marksheet.php" method="post">
    
<table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;" >
    <tr>
    	<td>Roll Number</td>
    	<td><input  type = "number" name = "SearchRoll" required size = "5"/></td>
    	<td><input type="submit" style="font-size: 15px; border-radius: 7px; background-color: #e7e7e7;"></td>
    </tr>    
</table>
    
</form>      
      
      
<?php
    $host = 'localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbname='school';
    $SearchRoll = filter_input(INPUT_POST, 'SearchRoll');
    
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname); 
    
    $query="SELECT * FROM student_info where RollNo=$SearchRoll ;";
    
    $result=mysqli_query($conn,$query);  
    
    $rows=mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0){ 
        {
        $Name=$rows['Name'];
        $RollNo=$rows['RollNo'];
        $Class=$rows['Class'];
        $Physics=$rows['Physics'];
        $Biology=$rows['Biology'];
        $Chemistry=$rows['Chemistry'];
        $Maths=$rows['Maths'];
        $Marathi=$rows['Marathi'];
        $English=$rows['English'];
        $Total=$rows['Total'];
        $Percentage=$rows['Percentage'];
        }
    }
    else{
        $Name="No Student Found";
        $RollNo="";
        $Class="";
        $Physics="";
        $Biology="";
        $Chemistry="";
        $Maths="";
        $Marathi="";
        $English="";
        $Total="";
        $Percentage="";
    }
    
    mysqli_close($conn);
    ?>
    
    
    <table style="font-size: 20px;margin-top: 30px;margin-left: auto;margin-right: auto;font-family: sans-serif;" >
        
        <tr>
            <td>Name : </td>
            <td><?php echo $Name ?></td>
        </tr>
        
        <tr>
            <td>Roll No : </td>
            <td><?php echo $RollNo ?></td>
        </tr>
        
        <tr>
            <td>Class : </td>
            <td><?php echo $Class ?></td>
        </tr>
        
        
        <tr>
            <td>Physics : </td>
            <td><?php echo $Physics ?></td>
        </tr>
        
        <tr>
            <td>Biology : </td>
            <td><?php echo $Biology ?> </td>
        </tr>
        
        <tr>
            <td>Chemistry : </td>
            <td><?php echo $Chemistry ?></td>
        </tr>
        
        <tr>
            <td>Maths : </td>
            <td><?php echo $Maths ?></td>
        </tr>
        
        <tr>
            <td>Marathi : </td>
            <td><?php echo $Marathi ?></td>
        </tr>
        
        <tr>
            <td>English : </td>
            <td><?php echo $English ?></td>
        </tr>
        
        <tr>
            <td>Total : </td>
            <td> <?php echo $Total ?></td>
        </tr>
        
        <tr>
            <td>Percentage : </td>
            <td> <?php echo "$Percentage%" ?> </td>
        </tr>
        
        <tr>
            <td></td>
        </tr>
        
        <tr>
            <td><button style="font-size: 20px; border-radius: 7px; background-color: #e7e7e7;" onclick = "window.location.href='homepage.html'" >Home-Page</button></td>
            
        </tr>
    </table>
    
</body>
</html>