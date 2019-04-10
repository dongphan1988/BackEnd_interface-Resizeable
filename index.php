<?php
include "Resizeable.php";
include "Circle.php";
include "Rectangle.php";
include "Square.php";
    echo "<h1>CIRCLE</h1>";
$circle = new Circle("circle1", 100);
    echo "Radius circle first " . $circle->radius . "<br>";
$circle->resize(5);
    echo "Radius circle last " . $circle->radius . "<br>";

    echo "<h1>RECTAMGLE</h1>";

$rectangle = new Rectangle(50, 100);
echo "Length rectangle first = " . $rectangle->getlength();
echo "<br> Height rectangle first = " . $rectangle->getHeight();
$rectangle->resize(5);
echo " <br><br> Length rectangle last = " . $rectangle->getlength();
echo "<br> height rectangle last = " . $rectangle->getHeight();

echo "<h1>SQUARE</h1>";
$square = new Square(100,100);
echo "size square first = " . $square->getlength()."<br>";
$square->resize(5);
echo "size square last = " . $square->getlength()."<br>";

