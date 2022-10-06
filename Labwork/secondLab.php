<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>secondLab</title>
</head>
<body>
    <?php 
    $n = 1;
    $s = "1";
     // wrong string mark was used
    $n1 = $n + $s; 
    $n2 = $n1 . "10 little penguins";
    //the + was used to concatenate and it caused an error we should use .
    $n3 = "hello";
    // wrong string mark was used
    $n4 = "world";
     // wrong string mark was used
    $n5 = $n3.$n4;
     //the + was used to concatenate hence the merge of the two variable did not work
    $n6 = $n3.$n4;
    // worked with no error

    echo($n."<br>");
    echo($s."<br>");
    echo($n1."<br>");
    echo($n2."<br>");
    echo($n3."<br>");
    echo($n4."<br>");
    echo($n5."<br>");
    echo($n5."<br>");
    
    ?>
</body>
</html>