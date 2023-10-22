<pre>
<?php  
$array1 = array(2, 5, 7, 6, 9); 
$array2 = array(3, 2, 5, 6, 8); 
  
 
$result = array_intersect($array1, $array2); 
  
 
$result = array_values($result); 
  

print_r($result); 
?> 
</pre>