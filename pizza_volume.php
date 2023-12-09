<?

function volume_pizza_calculate($radius, $height) {
  
    $volume = pi() * $radius**2 * $height;
    return round($volume);
  }
  
  //radius
  $radius = 50; 
  //height 
  $height = 8; 
  //volume
  $volume = volume_pizza_calculate($radius, $height);
  
  //output
  echo(`volume {$volume}`);
