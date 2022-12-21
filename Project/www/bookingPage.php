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
  <div style="width:800px; margin:0 auto;">
    <div class="select">

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Choose your trainer and the plan</label>
          </br>
        </div>
        <form method="POST" action="../src/php/booking_action.php">
          <select class="custom-select" id="inputGroupSelect01" name="name">
            <option selected>Choose a trainer</option>
            <option value="Jeff">Jeff</option>
            <option value="Matt">Matt</option>
            <option value="David">David</option>
          </select>
          <select class="custom-select" id="inputGroupSelect01" name="plan">
            <option selected>Choose a plan</option>
            <option value="1">1 Month</option>
            <option value="3">3 Months</option>
            <option value="6">6 Months</option>
            <option value="12">12 Months</option>
          </select>
          <div class="select">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <input class="btn btn-warning btn-lg btn-block" type="submit" value="Submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>