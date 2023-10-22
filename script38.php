<pre>
<?php
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

 echo "<br/>";
 
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_unshift($stack);
?>

<?php
$a=array(0=>"red",1=>"green");
array_unshift($a,"blue");
print_r($a);
?>
</pre>
