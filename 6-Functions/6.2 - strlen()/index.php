<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot(){
    $voornaam = "Hanif";
    $achternaam = "Akazim";
   $geheleNaam = $voornaam . " " . $achternaam;
   $mijnnaam= "mijn naam is". " " .$geheleNaam;
    echo  strtoupper( $mijnnaam);

}
mijnNaamIsGroot();





?>

</body>
</html> 