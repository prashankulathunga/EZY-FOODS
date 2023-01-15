<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/navbar.css">
    <link rel="stylesheet" href="about.css">
    <title>Document</title>

    <style>

body{
    display: flex;
    justify-content: center;
    min-height: 100%;
    max-height: 100%;
    background: linear-gradient(180deg,#232526,#414345);
    background-repeat: no-repeat;
    background-size: cover;
}

.main-container{
    width: 70%;
    height: auto;
    background: linear-gradient(#f88521,#ffdf4f);
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: auto;
    border-left: 2px solid black;
    border-right: 2px solid black;
    height: 100vh;
}
.navbar-container{
    position: fixed;
    width:70.1%;
    height: 60px;
    background-color: red;
    z-index: 220;
    }

    @media (max-width: 400px){
    .main-container{
        width: 100%;
    }

    .navbar-container{
        width: 99%;
        text-align: center;
        margin: 0;
    }

    .team-container {
        grid-template-columns: 2fr;
    }
}

    </style>
</head>
<body>
    <div class="main-container">
        <div class="navbar-container">
            <?php include './components/navbar.php'; 
            navbar();
            ?>
        </div>
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
        <div class="footer-container">
            <?php include 'footer.php'; 
            footer();
            ?>
        </div>
    </div>
</body>
</html>