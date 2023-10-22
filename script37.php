

<?php 
    

$arr = array(); 
  

array_push($arr, 1, 2, 3, 4, 5); 
  
print_r("Array after multiple insertions </br>"); 
print_r($arr); 
array_pop($arr); 
  
echo "<br/>";
print_r("Array after a single pop </br>"); 
print_r($arr); 
  
?>