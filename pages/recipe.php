<?php
include '../config/config.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="../styles/recipe.css">
    <link rel="stylesheet" href="../components/navbar.css">
</head>
<body onload="document.body.style.opacity='1'">
    
    
    
<?php
include '../components/navbar.php';
    // read all rows from database table
    $sql = "SELECT * FROM recipe WHERE id=$id";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    //read data from each row
    while ($row = $result->fetch_assoc()) {

    echo '
        <head><title>'.$row['recipe'].'</title></head>
        <div class="main-container">
      <div class="navbar-container">';
        navbar();
    echo '</div>
        <div class="main-content">
            <div class="img-container">
                <img src="'.$row['image'].'" alt="img">
            </div>
            <div class="title-container">
                <h1 class="title">'.$row['recipe'].'</h1>
                <p class="cooktime">CookTime : '.$row['cooktime'].' Minutes</p>
            </div>
        </div>
        <div class="ingredients">
            <h1>INGREDIENTS</h1>
            <p>'.nl2br($row['ingredients']).'</p>
        </div>
        <div class="method">
            <h1>METHOD</h1>
            <p class="methodp">'.nl2br($row['method']).'</p>
        </div>
        ';
    }
    ?>
    <div class="footer-container">
    <?php include '../components/footer.php'; 
    footer();
    ?>
    </div> 
    </div>
</body>
</html>