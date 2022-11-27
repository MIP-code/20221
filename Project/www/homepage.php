<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <?php
    include('index.php');
    ?>
    <link rel="stylesheet" href="../src/css/homepage.css">
</head>

<body>
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>This website represents our first time working in a team to develope a single website by sharing one git repository and also using PHP, SQL, Bootstrap.</p>
        <p>We decided to make a JIM website</p>
    </div>

    <h2 class="team" >Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="../src/imgs/computer-user-icon.png" class="center">
                <div class="container">
                    <h2>MJ</h2>
                    <p class="title">Software Engineer</p>
                    <p>Junior programmer</p>
                    <p>MJ@yu.edu.sa</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <img src="../src/imgs/computer-user-icon.png" class="center">
                <div class="container">
                    <h2>AE</h2>
                    <p class="title">Software Engineer</p>
                    <p>Junior programmer</p>
                    <p>AE@yu.edu.sa</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>