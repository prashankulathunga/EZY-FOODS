<?php

function navbar(){
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <title>Document</title>
</head>
<body>
   <nav class="navbar">
    <div class="nav-container">
    <div class="left">
        <a href="/">
            <img src="../images/logo1.png" alt="logo">
        </a>
    </div>
    
    <div class="right">
        <ul class="nav-links">
            <li><a href="/">HOME</a></li>
            <li><a id="recipes" href="/#pg2">RECIPES</a></li>
            <li><a href="/pages/about.php">ABOUT US</a></li>
            <li><a href="/pages/university.php">UNIVERSITY</a></li>
            <li><a href="/pages/admin/login.php">ADMIN</a></li>
        </ul>
    </div>
    </div>
   </nav> 
</body>
</html>
    ';
}

?>