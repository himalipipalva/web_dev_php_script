<pre>
<?php  
function Flip($array) 
{ 
    $result = array_flip($array); 
    return($result); 
} 
  
$array = array("aakash" => "Himali", "jay" => "sristi",  
               "gaurav" => "riya", "Ansh" => "Himali"); 
print_r(Flip($array)); 
  
?> 
<pre>