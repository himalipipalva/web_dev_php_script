
<?php
$names = ['himali', 'jay', 'Monika', 'James', 'Astha', 'Jessi', 'Roy'];
$country_capitals = ['Canada' => 'Ottawa', 'Germany' => 'Berlin', 'United States' => 'Washington D.C.', 'China' => 'Beijing', 'India' => 'New Delhi', 'Australia' => 'Canberra'];
// Output — Roy 
echo $names[array_key_last($names)];
// Output — Canberra 
echo $country_capitals[array_key_last($country_capitals)];
?>