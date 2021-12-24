<?php

function findLargest($arr) {
  $largest = $arr[0];
  foreach($arr as $value) {
    if($value > $largest) {
      $largest = $value;
    }
  }
  return $largest;  
}

$arr = [2, 3, 4, 3, 54, 1, 4, 52, 20];
$result = findLargest($arr);
print($result . "\n");