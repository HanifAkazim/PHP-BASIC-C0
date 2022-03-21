<!DOCTYPE html>
<html>
<body>

<?php





$car = 10;
$bike = 15;

if( $car < $bike && $bike > $car ) {
    echo "Een vergelijking met && ";
}else {
    echo "oh nee";
}
echo "<br>";

if( $car <= $bike || $bike == $car ) {
    echo "Een vergelijking met ||";
}else {
    echo "oh nee";
}

echo "<br>";

if( $car == 10 xor $bike == $car ) {
    echo "Een vergelijking met xor ";
}else {
    echo "oh nee";
}

echo "<br>";

if( $car !== $bike > 20 ) {
    echo "Een vergelijking met !";
}else {
    echo "oh nee";
}










?>

</body>
</html>









