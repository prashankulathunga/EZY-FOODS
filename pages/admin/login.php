<?php
session_start();
include '../../config/config.php';
include '../../config/warning.php';
$email = $_POST["email"];
$password = $_POST["password"];
  
if(isset($email)){

$query = mysqli_query($connection,"select * from admin");

while($row = mysqli_fetch_array($query)){

if($email == $row['UMAIL'] && $password == $row['UPASSWD']){
    $_SESSION['email'] = $email;
    header("Location: /pages/admin/dashboard.php");
    
}else if(!($email == $row['UMAIL']) && !($password == $row['UPASSWD'])){
    echo $email;
    echo $password; 
    
}
}
$mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>

    <style>
      .footer {
        z-index: 100;
      }
    </style>
</head>
<body>

<section class="vh-100" style="background-color: #FD5901;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../../images/login-banner.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">EZY FOODS</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" value="login">Login</button>
                    <a href="/" class="btn btn-primary btn-lg my-3" role="button">Back</a>
                  </div>

                  <!-- <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p> -->
                  <a href="/pages/maintain.php" class="small text-muted">Terms of use.</a>
                  <a href="/pages/maintain.php" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
  <?php
  include './components/footer.php';
  footer();
  ?>
  </div>

</section>
    


</body>
</html>