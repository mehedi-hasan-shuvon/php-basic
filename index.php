<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <!-- this is a comment   -->
    <h2>Follow each links for practice</h2>
    <br />

    <ul>
        <li><a  href="ifStatements.php">IF ELSE</a></li>
        <li><a  href="switchStatements.php">Switch Statements</a></li>
        <li><a  href="forLoop.php">For Loop</a></li>
        <li><a  href="whileLoop.php">While Loop</a></li>
        <li><a  href="array.php">Array</a></li>
        <li><a  href="stringManipulation.php">String Manipulation</a></li>
        <li><a  href="dateAndTime.php">Date and Time Manipulation</a></li>
        <li><a  href="functions.php">Functions</a></li>


    </ul>



    <?php 
    // this is a comment  in php
        echo 'Hello PHP!';
        echo '<br />';
        echo 'Second line';
        echo '<h1> Hello PHP</h1>';
    ?>

    <?php
        // declear a variable
        $name= 'Mehedi Hasan Shuvon';

        $age= 26;


        //for single quotes we can't use variable inside the string we have to concatinate it
        echo '<h1>My name is: '.$name.' and i am '.$age." years old".'</h1>';
        //change the value of a variable
        $age=$age+4;
        echo '<h1>But now i am '.$age." years old".'</h1>';
        // for double quotes we can use variable inside the string 
        echo "<h1> My name is $name and i am $age years old</h1>"


    
    ?>
  


    
</body>
</html>
