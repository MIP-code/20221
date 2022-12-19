<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <?php
    include('index.php');
    ?>

<link rel="stylesheet" href="../src/css/bookingPage.css">
</head>
<body>

<div class="select">
    
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Trainer</label>
  </div>
  <form method="POST" action="">
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose a trainer</option>
    <option value="1">Jeff</option>
    <option value="2">Matt</option>
    <option value="3">David</option>
  </select>
</form>

</div>
</div>
<div class="select">
    
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Day</label>
  </div>
  <form method="POST" action="">
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose a day</option>
    <option value="1">Sunday</option>
    <option value="2">Monday</option>
    <option value="3">Tuesday</option>
    <option value="4">Wednsday</option>
    <option value="5">Thursday</option>
    <option value="6">Friday</option>
    <option value="7">Saturday</option>
  </select>
</form>
</div>
</div>

<div class="select">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Time</label>
  </div>
  <form method="POST" action="">
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose a time</option>
    <option value="1">1:00pm - 3:00pm </option>
    <option value="2">4:00pm - 7:00pm</option>
    <option value="3">8:00pm - 11:00pm</option>
  </select>
  </form>
</div>
<div class="input-group-append">
  <input class="btn btn-warning btn-lg btn-block" type="submit" value="Submit">
  </div>
</div>

</body>
</html>

