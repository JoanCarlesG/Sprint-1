<?php 
include "Shape.php";
include "Triangle.php"; 
include "Rectangle.php";
$triangle1 = new Triangle (4,7);
$rectangle1 = new Rectangle(8,3);

echo $triangle1->area(), "<br>";
echo $rectangle1->area();
?>