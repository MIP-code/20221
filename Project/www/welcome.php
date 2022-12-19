
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <?php

    session_start();
      include('index.php');

      include('../php/db_login.php');





      if(!isset($_SESSION['id'])){
         die("<p> Please <a href = \"login.php\">login</a></p>");
      }


      
if(!$connection){
   echo "Error: ". mysqli_connect_errno();
   echo "<br>";
   echo "Error: ". mysqli_connect_error();
   exit;

}
$user_id = $_SESSION['id'];
$query = "SELECT * FROM user_profile WHERE u_id ='$user_id'";

$result = mysqli_query($connection, $query);

   if($result){
      if(mysqli_num_rows($result) > 0){
         $resultrows= mysqli_fetch_row($result);
         echo "Welcome ".$resultrows[1]." ".$resultrows[2];
      }else{
         echo "make a profile";
      }

   }else{
      echo "an error occured";
   }
    
    ?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="../src/css/homepage.css">
</head>
<body>
      
      








      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>