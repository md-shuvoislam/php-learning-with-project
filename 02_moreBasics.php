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
    
    ?>

    </div>
</body>
</html>