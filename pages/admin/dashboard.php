<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:/pages/admin/login.php");
}

include '../../config/config.php';
include '../../config/warning.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="stylesheet" href="./components/style.css">
    <title>Dashboard</title>

    <style>
      .footer {
        z-index: 100;
      }
    </style>
</head>
<body onload="document.body.style.opacity='1'">
    <div class="main-container">
        <div class="btn-container">
            <a href="/pages/admin/manage/add.php" class="addrc">Add Recipes</a>
           <a href="/pages/admin/manage/panel.php" class="manage">Manage Recipes</a>
        </div>
        <div class="count-container">
            <div class="main-count">
                <div class="total-recipe">
                    <span class="title">Total Recipe Count :</span>

                    <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                </div>
            </div>
            <div class="sub-count-container">
                <div class="sub-count">
                    <div class="italian">
                        <span class="title">Italian Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=1";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                    <div class="srilankan">
                        <span class="title">Sri Lankan Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=2";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                    <div class="chineese">
                        <span class="title">Chineese Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=3";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                    <div class="japanese">
                        <span class="title">Japanese Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=4";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                    <div class="thai">
                        <span class="title">Thai Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=5";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                    <div class="desserts">
                        <span class="title">Desserts Recipe Count :</span>
                        <?php
                         // read all rows from database table
                            $sql = "SELECT count(*) as c FROM recipe WHERE category=6";   ///SELECT count(*) as c FROM recipe WHERE category=4; 
                            $result = $connection->query($sql);

                            if (!$result) {
                                die("Invalid query: " . $connection->error);
                            }

                            //read data from each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<span class='count'>".$row['c']."</span>";
                               
                            }
                    ?>
                    </div>
                </div>
            </div> 
        <div class="homediv">
            <a href="/" class="home">Back to Home</a>
        </div>           
        </div>
    </div>
   

    
</body>
</html>