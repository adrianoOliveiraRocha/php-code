<?php

function ContainsDuplicates($arr) {
  
  for($i = 0; $i < count($arr); $i++) {
    for($j = $i; $j < count($arr); $j++) {
      if($i != $j) {
        if($arr[$i] == $arr[$j]) return true;
      }
    }
  }
  return false;
}

$arr = [2, 3, 4, 13, 54, 1, 4, 52, 20];
echo ContainsDuplicates($arr) . "\n";
