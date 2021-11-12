<?php
require_once 'exercici2.php';

$triangle = new Triangle(14, 60);
$rectangle = new Rectangle(24, 50.41);

echo "El triangle te una area de: " . $triangle->area() . " unitats quadrades.<br>";
echo "El rectangle te una area de: " . $rectangle->area() . " unitats quadrades.<br>";
?>