<?php 
$numbers=[];

while (count($numbers) <= 15) {
  $number=rand(0,100);
  if (!in_array($number, $numbers)) {
  # code...
  $numbers[] = $number;
 };
};

var_dump($numbers)
?>