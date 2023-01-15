<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="./about.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script type="text/javascript" src="./scripts/view.js"></script>
    <link rel="stylesheet" href="./components/navbar.css">
    <title>About US</title>
</head>
<body onload="document.body.style.opacity='1'">
    <div class="navbar-container">
      <?php include './components/navbar.php'; 
      navbar();
      ?>
    </div>
    <div class="main-container">
    <div class="top">
            <h1 class="title"><span>About</span> US</h1>
        </div>
        <div class="middle">
            <p class="about1">Hello and we welcome you to our website site ezy foods. Our website contains small and delicious recipes that anyone can make anywhere. </p>
      <p class="about2">We wish to give delicious meals that can be made in little to no time for students who have less time, to immigrant family's and students that don't have much facilities to cook.</p>
        </div>
        <div class="bottom">
            <h2>Our Team</h2>
            <div class="team-container">
                <?php
                include '../components/about-card.php';
                include '../config/config.php';

                // read all rows from database table
                $sql = "SELECT * FROM developers";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }

                //read data from each row
                while ($row = $result->fetch_assoc()) {
                    about_card($tname=$row['name'],$tposition=$row['position'],$tid=$row['uid'],$tmail=$row['email']);
                }
                ?>
            </div>
        </div>
        <!-- <div class="footer-container">
        <?php include '../components/footer.php'; 
        footer();
        ?>
        </div> -->
    </div>
</body>
</html>