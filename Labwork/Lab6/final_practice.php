<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $firstname= $_POST["firstname"];
    $lastname= $_POST["lastname"];

    echo "<p>". $firstname. " ". $lastname. "</p>";

    ?>


<form action="action.php" method="post">
    firstname:<br>

    <input type="text" name="fname" id="">

    lastname:
    <input type="text" name="lname" id="">

</form>
</body>
</html>