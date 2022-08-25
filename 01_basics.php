<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP learning with project</title>
</head>
<body>
    <div class="container">
        <?php

        // output data in php with echo 

        echo "<h1> Learning php with project </h1>";

        echo "<br>";

        // varibale in php

        $variable1 = 10; // creating varibale
        $variable2 = 15; // creating varibale

        echo $variable1 + $variable2;

        echo "<br>";

        // operator in php

        /*
        Arithmetic Operator
        Assignment Operator
        Comparison Operator
        Increament/Deacreamnt operator
        */

        // Arithmatic operator Addition

        $x = 20;
        $y = 30;
        $z = $x + $y;
        echo "So the addition is = ";
        echo $z;

        echo "<br>";

        // Arithmatic operator substraction

        $a = 60;
        $b = 30;
        echo "Varibale a and b substraction is = ";
        echo $a - $b;

        echo "<br>";

        // Arithmatci oeprator multiplication

        $shuvo = 60;
        $islam = 15;
        $sikha = $shuvo * $islam;
        echo "Variable shuvo and islam multiplication is = ";
        echo $sikha;

        echo "<br>";

        // Arithmatci operator division

        $shuvo = 60;
        $islam = 15;
        $sikha = $shuvo / $islam;
        echo "Variable shuvo and islam division is = ";
        echo $sikha;

        echo "<br>";


        // Assignment operator

        $x = 20;
        $x += 100; // means x = x + 100;
        echo $x;

        echo "<br>";

        $x = 20;
        $x -= 100; // means x = x - 100;
        echo $x;

        echo "<br>";

        $x = 20;
        $x *= 100; // means x = x * 100;
        echo $x;

        echo "<br>";

        $x = 20;
        $x /= 100; // means x = x / 100;
        echo $x;

        echo "<br>";

        // Comparison operator

        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";

        // Increament/Decreament Operators

        $_variable_common = 10;

        //echo $_variable_common++;
        //echo $_variable_common--;
        //echo ++$_variable_common;
        echo --$_variable_common;
        echo "<br>";
        echo $_variable_common;

        // Logical operator

        // and (&&)
        // or (||)
        // xor
        // not !

        // $myvar = (true and false);
        //$myvar = (false || false);
        $myvar = (true xor true);
        echo "<br>";
        echo var_dump($myvar);


        // PHP Data type

        // 1. String
        // 2. Integer
        // 3. Float 
        // 4. Boolean 
        // 5. Array 
        // 6. Object 

        echo "<br>Data Types<br>";
        $var = "This is a string";
        echo var_dump($var);
        $var = 67;
        echo var_dump($var);
        $var = 67.52;
        echo var_dump($var);
        $var = true;
        echo var_dump($var);

        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota");
        var_dump($cars);




        ?>
    </div>
</body>
</html>