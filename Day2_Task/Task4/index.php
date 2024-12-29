<!-- 4-  Write a PHP script to get the sum and avg of an indexed array
with value = 45 in index =1
with value = 12 in index =0
with value = 25 in index =3
with value = 10 in index =2 
after that sort it in a reverse order (highest to lowest). -->

<?php
$array = [12, 45, 10, 25];

echo "Array before sorting  ";
print_r($array);
echo"<br>";

$sum = array_sum($array);

$avg = $sum / count($array);

// Sort the array in reverse order
rsort($array);

echo "Array after sorting them descending (highest to lowest)";
print_r($array);

echo"<br>";

// Sort the array in order
sort($array);

echo "Array after sorting them Ascending (lowest to  highest)";
print_r($array);


echo"<br>";
echo "Sum of the array: " . $sum ;

echo"<br>";
echo "Average of the array: " . $avg ;
?>