<pre>

<?php

$input = array("apple", "banana", "orange", "mango", "papaya", "kiwi");
$replacement = array("lemon", "carrot", "corn");


$result = array_splice($input, 2, 3, $replacement);
print_r($result);
print_r($input);
?>

</pre>

