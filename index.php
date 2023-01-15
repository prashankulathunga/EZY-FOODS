<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./components/navbar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type="text/javascript" src="./scripts/view.js"></script>
    <title>EZY FOODS</title>
</head>
<body onload="document.body.style.opacity='1'">
  <div class="main-container">
      <div class="navbar-container">
        <?php include './components/navbar.php'; 
        navbar();
        ?>
      </div>
        <div class="home-container">
            <div class="center-container">
                <h1>EZY Foods</h1>
                  <button id="expbtn" class="expbtn" type="button">Explore</button>
              </div>
        </div>
        <div class="category-container">
            <section class="options">
                <div class="page-two" id="pg2"></div>
                <p class="quote">...Let's grab a recipe from here...</p>
                <div class="row" id="rw">
                  <div class="card card1">
                    <a href="/pages/category.php?category=1">Italian</a>
                  </div>
                  <div class="card card2">
                    <a href="/pages/category.php?category=2">Sri Lankan</a>
                  </div>
                  <div class="card card3">
                    <a href="/pages/category.php?category=3">Chinese</a>
                  </div>
                  <div class="card card4">
                    <a href="/pages/category.php?category=4">Japanese</a>
                  </div>
                  <div class="card card5">
                    <a href="/pages/category.php?category=5">Thai</a>
                  </div>
                  <div class="card card6">
                    <a href="/pages/category.php?category=6">Desserts</a>
                  </div>
                </div>
              </section> 
        </div>
        <div class="footer-container">
        <?php include './components/footer.php'; 
        footer();
        ?>
        </div>
    </div>


    <script>
      
        $("#expbtn").click(function() {
                $('html, body').animate({
                    scrollTop: $("#pg2").offset().top
                }, 1000);
            });
        $("#recipes").click(function() {
                $('html, body').animate({
                    scrollTop: $("#pg2").offset().top
                }, 1000);
            });
    </script>
</body>
</html>