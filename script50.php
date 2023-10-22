<?php
  $arr = [4, 5, 2, 1, 3, 6, 8, 10];

  $filtered_array = array_filter($arr, function ($item) {
    return $item % 2 == 0;
  });

  foreach ($filtered_array as $value) {
    echo $value . ", ";
  }
?>
