<?php

function about_card($tname,$tposition,$tid,$tmail){

echo'
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="about-card.css">
    </head>
    <div class="card">
        <h1 class="name">'.$tname.'</h1>
        <p class="position">'.$tposition.'</p>
        <p class="id">'.$tid.'</p>
        <a class="contact" href = "mailto: '.$tmail.'">Contact</a>
    </div>
';
}
?>