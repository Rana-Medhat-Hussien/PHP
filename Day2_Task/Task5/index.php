<!-- 5-  Write a PHP script to sort the following associative array :
array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key   -->

<?php
$array = array(
    "Sara" => 31,
    "John"=>41,
    "Walaa"=>39,
    "Ramy"=>40
);

//English Alphabet
// A, B, C, D, E, F, G, H, I, J, K, L, M, N, 
// O, P, Q, R, S, T, U, V, W, X, Y, Z

echo "Array before ordering ";
print_r($array);
echo"<br>";

// ascending order sort by value (asort)
asort($array);
echo "Ascending order sorted by value:";
print_r($array);
echo"<br>";

// ascending order sort by Key (ksor)
ksort($array);
echo "Ascending order sorted by key:";
print_r($array);
echo"<br>";

// descending order sorting by Value (arsort)
arsort($array);
echo "Descending order sorted by value:";
print_r($array);
echo"<br>";

// descending order sorting by Key (krsort)
krsort($array);
echo "Descending order sorted by key:";
print_r($array);

?>