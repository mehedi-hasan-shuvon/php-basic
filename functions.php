<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP  Primer functions</title>
</head>
<body>
    <h1>Functions</h1>
    
    <?php


        function checkEven($num){
            if($num%2==0){
                echo "The number $num is even <br />";
            }else{
                echo "The number $num is odd <br />";
            }
        }

        checkEven(5);

        echo "<hr />";


        function addFunction ($num1, $num2){
            $sum=$num1+$num2;
            return $sum;
        }


        echo "the sum of 10,20 is".addFunction(10,20)."<br />";
        echo "the sum of 10,20 is".addFunction('10','20');
        echo "<hr />";

        $num=20;

        function changeNum($num1){
            $total=$num1+10;
            return $total;
        }
        $num=changeNum($num);
        echo $num."<br />";


        // or we can send the reference of the variable
        function changeNum1(&$num1){
            $num1+=10;
        }
        changeNum1($num);
        echo $num."<br />";

        echo "<hr />";

        function returnProduct($num1, $num2){
            $prod=$num1*$num2;
            return $prod;
        }

        $returned_value=returnProduct(10,20);

        echo $returned_value."<br />";
    ?>

</body>
</html>