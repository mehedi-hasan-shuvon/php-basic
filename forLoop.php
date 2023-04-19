
<?php 
    $title= 'for loop';
    include 'includes/header.php';
    ?>

    <h2>For Loop for counting 0 to 9</h2>
    
    <?php

    for($counter=0;$counter<10;$counter++){
        echo "<h4>counter value= $counter</h4>";
    }
     ?>
    

    <?php require "includes/footer.php" ?>