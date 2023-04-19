<?php 
    $title= 'Array';
    include 'includes/header.php';
    ?>
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
    
 <?php require "includes/footer.php" ?>