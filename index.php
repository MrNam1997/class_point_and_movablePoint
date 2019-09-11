<?php
include_once "Point.php";
include_once "MovablePoint.php";
$pointTest = new Point(10,11);
$xSpeedTest = new MovablePoint(11,13,100,101);
echo $xSpeedTest->move();


