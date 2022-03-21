<!DOCTYPE html>
<html>
<body>

<?php







$getallen =  [576,445,687,1,46,21,42,];

asort($getallen);

foreach($getallen as $laag_hoog)

print_r($laag_hoog);

echo "<br>";





$laag_hoog = ['576,445,687,1,46,21,42',];

arsort($laag_hoog);

echo "<br>";

foreach ($laag_hoog as $hoog_laag)

print_r($hoog_laag);






?>




</body>

</html>