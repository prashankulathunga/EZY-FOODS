<?php
include '../config/config.php';

$category = $_GET['category'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/images/favicon.png">
  <link rel="stylesheet" href="../styles/category.css">
  <link rel="stylesheet" href="../components/navbar.css">
  <link rel="stylesheet" href="../styles/general.css">
  <script type="text/javascript" src="./scripts/view.js"></script>
  <!-- <title>EZY FOODS Category</title> -->
</head>
<body onload="document.body.style.opacity='1'">
<?php
  $categories = array("Italian", "SriLankan", "Chineese", "Japanese", "Thai", "Desserts");
  $title = $categories[$category-1];
  echo '<title>'.$categories[$category-1].'</title>';;
  ?>
<div class="main-container">
<div class="navbar-container">
    <?php include '../components/navbar.php'; 
    navbar();
    ?>
  </div>
<div class="category-name"><div class="category-title">
  <?php echo ''.$categories[$category-1].''; ?>
</div>
</div>
<div class="card-cont">
<?php
// read all rows from database table
$sql = "SELECT * FROM recipe WHERE category=$category";
$result = $connection->query($sql);

if (!$result) {
    die("Invalid query: " . $connection->error);
}

//read data from each row
while ($row = $result->fetch_assoc()) {

  echo '
  <div class="card">
    <div class="image">
      <img src="'.$row['image'].'"/>
    </div>
    <div class="details">
      <div class="center">
        <h1>'.$row['recipe'].'</h1>
        <p>CookTime : '.$row['cooktime'].' Min</p>
      </div>
      <a class="link" href="/pages/recipe.php?id='.$row['id'].'">Let\'s Cook</a>
    </div>
  </div>
  ';
}
?>
</div>
<div class="footer-container">
    <?php include '../components/footer.php'; 
    footer();
    ?>
    </div> 
</div>

</body>
</html>
