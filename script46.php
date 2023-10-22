
<pre><?php 
  
  
function Fill($start_index, $number_elements, $values){ 
    return(array_fill($start_index, $number_elements, $values)); 
} 
  
 
$start_index = 2; 
$number_elements = 5; 
$values = "Geeks"; 
print_r(Fill($start_index, $number_elements, $values)); 
?> 
</pre>