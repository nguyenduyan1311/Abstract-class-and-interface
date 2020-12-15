<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 , 4, 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
$arrayOfShape = array($circle, $cylinder, $rectangle, $square);
echo '<b>Before resize :</b><br/>';
foreach ($arrayOfShape as $key => $value) {
    echo $value->name . ' area:' . $value->calculateArea() . '<br/>';
}
echo '<b>After resize :</b><br/>';
$percent = mt_rand(1,100);
echo 'Resize size of Shape :' .($percent) . '%<br/>';
foreach ($arrayOfShape as $key => $value) {
    $value->resize($percent/100);
    echo $value->name . ' area:' . $value->calculateArea() . '<br/>';
}