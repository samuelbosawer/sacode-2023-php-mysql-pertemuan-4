<?php 
$x = true;  //1
$y = false; //0

// AND = x
$and = $x && $y && true || true ;

var_dump($and);

// OR  = +
$or = $x || $y;

var_dump($or);


?>