<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./components/navbar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script type="text/javascript" src="../scripts/view.js"></script>
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
            <section class="options">
              <div class="page-two" id="pg2">
                  <div class="scroll" id="px"></div>
                  <p class="quote"><span class="dot">...</span>Let's grab a recipe from here<span class="dot">...</span></p>
                </div>
                <div class="category-div">
                  <div class="category-container">
                      <a href="/pages/category.php?category=1">
                      <div class="card" id="it">
                          <span>Italian</span>
                      </div>
                      </a>
                      <a href="/pages/category.php?category=2">
                      <div class="card" id="sl">
                          <span>SriLankan</span>
                      </div>
                      </a>
                      <a href="/pages/category.php?category=3">
                      <div class="card" id="ch">
                          <span>Chinese</span>
                      </div>
                      </a>
                      <a href="/pages/category.php?category=4">
                      <div class="card" id="jp">
                          <span>Japanese</span>
                      </div>
                      </a>
                      <a href="/pages/category.php?category=5">
                      <div class="card" id="th">
                          <span>Thai</span>
                      </div>
                      </a>
                      <a href="/pages/category.php?category=6">
                      <div class="card" id="ds">
                          <span>Desserts</span>
                      </div>
                      </a>
                  </div>
                  </div>
              </section> 
        <div class="footer-container">
        <?php include '../components/footer.php'; 
        footer();
        ?>
        </div>
    </div>


    <script>
      
        // $("#expbtn").click(function() {
        //         $('html, body').animate({
        //             scrollTop: $("#px").offset().top
        //         }, 1000);
        //     });
        $("#recipes").click(function() {
                $('html, body').animate({
                    scrollTop: $("#pg2").offset().top
                }, 1000);
            });

        $("#expbtn").click(function() {
            $('html,body').animate({
              scrollTop: $(".scroll").offset().top},
              1000);
          });
    </script>
</body>
</html>