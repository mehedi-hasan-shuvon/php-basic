<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer string manipulation</title>
</head>
<body>

    <h1>PHP string manipulation</h1>
    <?php

        // concatenation of strings
        $phrase1= "student who came late";
        $phrase2= "in class, stand with rock";
        echo $phrase1 ." ". $phrase2;

        echo "<br/>";
        echo "<hr/>";

        //string transformation
        $name="mehedi hasan shuvon";
        echo "<br>Uppercase first letter: ". ucfirst($name)."<br/>";  // to make upper case first letter use ucfirst
        echo " uppercase first letter of each word: ". ucwords($name)."<br/>"; // to make upper case first letter of each word use ucwords
        echo " Make everything uppercase: ".strtoupper($name)."<br/>"; // to make everything upperccase use strtoupper
        echo " Make everything lowercase: ".strtolower("THIS WAS ALL UPPER CASE")."<br/>"; // to make everything lowercase use strtolower
        echo "<hr/>";
        echo "Repeat String: ".str_repeat(strtoupper($name)." ",5)."<br/>"; // to repeat string use str_repeat
        echo "<hr/>";
        echo "Get a substring: ".substr($name, 2, strlen($name)) ."<br/>"; // to get a substring use substr
        echo "<hr/>";
        echo "Get position of string: ".strpos($name, "h")."<br/>"; // to get position of string use strpos
        echo "<hr/>";
        echo "Find character: ".strchr($name, "s")."<br/>"; // to find character use strchr
        echo "<hr/>";
        echo "Find length of string: ".strlen($name)."<br/>"; // to find length of string use strlen
        echo "<hr/>";
        echo "Without trim: ". "A"." B C D "."E"."<br/>"; // without trim
        echo "Trim spaces on both sides: ". "A".trim(" B C D ")."E"."<br/>"; // trim spaces on both sides
        echo "Trim spaces to the left: ". "A".ltrim(" B C D ")."E"."<br/>"; // trim spaces to the left
        echo "Trim spaces to the right: ". "A".rtrim(" B C D ")."E"."<br/>"; // trim spaces to the right
        echo "<hr/>";
        echo "Replace string with another: ".str_replace("stand", "sit", $phrase2)."<br/>"; // to replace string with another use str_replace




    ?>


    
</body>
</html>