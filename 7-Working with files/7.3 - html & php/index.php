<!DOCTYPE html>
<html>
<body>

<?php

 require 'database.php'; ?>
<html>
<head>
</head>
<body>

<div class = "menu">
    <?php include 'menu.php'; ?>
</div>

<div id="isMeerderJarig">
    <?php

    $leeftijd = 18;
    $minderjarig = 16;
  
    if( $leeftijd > 16){
        echo " <h5> je bent meerderjarig </h5>";
    }elseif( $minderjarig < $leeftijd){
        echo "je bent nog niet volwassen";
    }else {
          echo "Hallo";
    }

   ?>
</div>

</body>



