<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width: 80%;
    background-color: rgb(228, 195, 195);
    margin: auto;
    padding: 23px;
}
</style>
<body>
    <div class="container">
    <h1> Lets learn about PHP </h1>
    <p>Your party status is here:</p>
    <?php
    $age = 20;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }

    echo "<br>";

    // array in php

    $langguages = array("Python", "C++", "php", "NodeJs");
    // echo ($langguages);
    //echo $langguages[0];

    // loop in php

    $a = 0;
    while ($a <= 10){
        echo "<br> The values of a is: ";
        echo $a;
        $a++;
    }

    echo "<br>";

    // Iterating arrays in PHP using while loop

    $a = 0;
    while ($a < count($langguages)) {
        echo "<br> The langguage is: "; 
        echo $langguages[$a];
        $a++;
    }

    echo "<br>";

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    echo "<br>";

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    echo "<br>";
    // for each
    foreach ($langguages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }

    echo "<br>";

    // function

    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }
    print_number(45);
    print_number(455);
    print_number(435);







    

    
    
    ?>


    </div>
</body>
</html>