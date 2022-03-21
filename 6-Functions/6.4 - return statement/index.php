<!DOCTYPE html>
<html>
<body>

<?php

function geefTienProcent(){
    $koopPrijs = 85;
    $korting = 10; 
    $percentage = $koopPrijs/100 * $korting;
    return $koopPrijs - $percentage;
  
};
 
function eind_korting(){
    echo 'Het totaalbedrag is' . geefTienProcent() . ' euro.';

};

eind_korting();




?>

</body>
</html> 