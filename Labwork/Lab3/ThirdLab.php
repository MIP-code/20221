<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Lab</title>
</head>
<body>
    <?php 

    $x=7;
    $y=5;

    echo("<p>". "This is the addition of $x + $y = ". add($x,$y)."<p>");

    echo("<p>". "This is the subtraction of $x + $y = ". sub($x,$y)."<p>");
    
    echo("<p>". "This is the multiplication of $x + $y = ". multiply($x,$y)."<p>");
    
    echo("<p>". "This is the division of $x + $y = ". division($x,$y)."<p>");

    //add method
    function add($x, $y){
        return $x+$y;
    }
    //sub method
    function sub($x, $y){
        return $x-$y;
    }
    //multiplication method
    function multiply($x, $y){
        return $x*$y;
    }
    //division method
    function division($x, $y){
        return $x/$y;
    }





    ?>
</body>
</html>