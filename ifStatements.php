<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer -IF Statsments</title>
</head>
<body>

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

</body>
</html>