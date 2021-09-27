<?php
$num = [60,50,90,70,80,45];

print max($num);

print min($num);

sort($num);

print_r($num);

$count = count($num);
for ($i = 0; $i < $count; $i++) {
  for ($n = 1; $n < $count; $n++) {
    if($num[$n-1] > $num[$n]) {
      $temp = $num[$n]; 
      $num[$n] = $num[$n-1]; 
      $num[$n-1] = $temp; 
    }
  }
}
print_r($num);
?>

