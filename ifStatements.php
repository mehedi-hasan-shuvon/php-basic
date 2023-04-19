
<?php 
    $title= 'if statements';
    include 'includes/header.php';
    ?>

    <?php
    
        echo "<h2>IF Statement</h2>";
        $grade=60;

        // if statement
        if($grade >50){
            echo '<h3 style="color:green;font-size:30px;">YOU HAVE PASSED</h3>';
        }else{
            echo '<h3 style="color:red">YOU HAVE FAILED</h3>';
        }

        $grade='C';

        // if else if statement
        if($grade == 'A'){
            echo '<h2 style="color:green">YOU ARE A SUPERSTAR</h2>';
            // check if grade is lowercase c
        }elseif($grade == 'B' ||  strtolower($grade) == 'c'){
            echo "<h2 style='color:blue'>YOU DID WELL</h2>";
        }else{
            echo '<h2 style="color:red">YOU HAVE FAILED</h2>';
        }




    ?>

<?php require "includes/footer.php" ?>