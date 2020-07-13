<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
</head>
<body>
    <?php
    
    echo("Hello World");
    echo "<h1>Rujul's Site</h1>";
    $name="Rujul";
    $age=21;
    echo "<h1>There once was a woman named $name</h1>";
    echo "<h1>Her age was $age</h1>";
    $age=30;
    echo "<h1>She liked the name $name</h1>";
    echo "<h1>But hated the age $age</h1>";
    // Data Types
    $string="TO be or not to be";
    $integer=30;
    $float=30.3;
    $bool= true;
    echo "<h3>$integer $string is $bool but it is $float</h3>";
    echo strtoupper ($string);
    echo 5+9;
    ?>
</body>
</html>