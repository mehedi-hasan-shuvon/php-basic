<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer while do-while</title>
</head>
<body>
    
    <h2>While Loop for counting 0 to 9</h2>
    <?php
    $i=0;
    // while loop
    while($i<10){
        echo "<h4>counter value= $i</h4>";
        $i++;
    }

    echo "<h2>Do-While Loop for counting 9 to 0</h2>";

    // do while loop
    $i--;
    do{
        echo "<h4>counter value= $i</h4>";
        $i--;
    }while($i>=0);
    
    ?>
    
</body>
</html>