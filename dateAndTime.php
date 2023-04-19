<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer -date and time manipulation</title>
</head>
<body>
    <h2>testing date and time  manipulation</h2>


    <?php

    $datenow=getdate();

    echo "Today's date is <br />";
    echo $datenow['mday']."<br />";
    echo $datenow['mon']."<br />";
    echo $datenow['year']."<br />";
    echo "Today is ".$datenow['mday']."/".$datenow["mon"]."/".$datenow['year']."<br />";
    echo date("m/d/y G.i:s<br>", time())."<br />";
    echo "Today is ";
    echo date("j of F Y, \a\\t g.i a", time());
    
     ?>
    
</body>
</html>