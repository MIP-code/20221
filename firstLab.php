<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstLab01</title>
</head>
<body>
    <?php 
    
   echo "<br>"echo "<h1>"."This is a header"."</h1>";
   echo "<p>"."This a paragraph"."</p>";

    $num=10;
   for ($i=0; $i < $num ; $i++) { 
      echo("Hello friend "."<br>");
   }
    
   //adding method
   function add($a, $b){
       $add = $a + $b;
       echo($add);
   }
    add(3,5);
    ?>
    
</body>
</html>