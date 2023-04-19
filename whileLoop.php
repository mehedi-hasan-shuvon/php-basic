<?php 
    $title= 'while loop';  
    include 'includes/header.php';
    ?>
    
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
    

    <?php require "includes/footer.php" ?>