<?php

// represent this graph => Understanding_php_arrays/img/graph.png

$graph = [];
$nodes = ['A', 'B', 'C', 'D', 'E'];
foreach($nodes as $x) {
  foreach($nodes as $y) {
    $graph[$x][$y] = 0;
  }
}

$graph["A"]["B"] = 1;
$graph["B"]["A"] = 1;
$graph["A"]["C"] = 1;
$graph["C"]["A"] = 1;
$graph["A"]["E"] = 1;
$graph["E"]["A"] = 1;
$graph["B"]["E"] = 1;
$graph["E"]["B"] = 1;
$graph["B"]["D"] = 1;
$graph["D"]["B"] = 1;

foreach ($nodes as $x) {
  foreach ($nodes as $y) {
    echo $x, $y . "\t";
  }
  echo "\n";
}

echo "\n";

foreach ($nodes as $x) {
  foreach ($nodes as $y) {
    echo $graph[$x][$y] . "\t";
  }
  echo "\n";
}

// After of to define connections => Understanding_php_arrays/img/connections_defined.png