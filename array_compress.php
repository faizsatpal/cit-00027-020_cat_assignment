<?php

function compressCharacter($chars) {
 
   $compressed = "";
  $current = $chars[0];
 $counter = 1;
  for ($i = 1; $i < count($chars); $i++) {
    if ($chars[$i] == $current) {
      $counter++;
    } else {
      if ($counter == 1) {
        $compressed .= $current;
      } else {
        $compressed .= $current . $counter;
      }
      $current = $chars[$i];
      $counter = 1;
    }
  }
  if ($counter == 1) {
    $compressed .= $current;
  } else {
    $compressed .= $current . $counter;
  }
  
  echo "final compressed string: {$compressed}";
  
  return $compressed;
}


$chars = ["a", "a", "b", "b", "c", "c", "c"];
compressCharacter($chars);

