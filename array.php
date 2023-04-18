<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer -Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php

    // only one dataTypes in array
    $numbers= array(1,2,3,4,5,6,'hello',8,9,10);

    echo $numbers[5]=1000;

    $arrayLength= count($numbers);
    
    echo "<p> $arrayLength </p>";

    echo "<p>$numbers[6]</p>";

    if(isset($numbers[12])){
        echo "<p>$numbers[12]</p>";
    }else{
        echo "<p>Index 12 does not exist</p>";
    }

    for($counter=0; $counter<count($numbers); $counter++){
        echo "<p>$numbers[$counter]</p>";
    }

    ?>
    
</body>
</html>