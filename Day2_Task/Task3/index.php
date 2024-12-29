<!-- 3- Try any three functions from String or Arrays built in. -->

<!-- wordwrap() – Wrap a string to a given number of characters -->
<?php
$string = "This is a long string that needs to be wrapped.";
echo wordwrap($string, 10, "<br>\n"); 
?>

<hr>

<!-- trim() – Remove whitespaces
or other characters from the beginning and end of a str -->
<?php
$string = "   Hello   ";
echo trim($string);  // Output: Hello
?>

<hr>

<!-- explode() – Split a string by a delimiter into an array -->
<?php
$string = "apple,banana,cherry";
$array = explode(",", $string);
print_r($array); // Output: Array ( [0] => apple [1] => banana [2] => cherry )
?>

<hr>

<!-- ucwords() – Convert the first character of each word in a string to uppercase -->
<?php
$string = "hello world";
echo ucwords($string); // Output: Hello World
?>

<hr>

<!-- strtoupper() – Convert a string to uppercase -->
<?php
$string = "hello";
echo strtoupper($string); // Output: HELLO
?>
