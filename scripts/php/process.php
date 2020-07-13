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
<?php include 'include2.php';?>
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
