<!-- 1-  Search for how to make \n work in browser. -->

<!-- First Method nl2br -->
<?php
$name = "Rana";
$age = 24;

$text = "Name: $name \n Age: $age";
echo nl2br($text); // Converts \n to <br> for HTML
?>

<br>

<!-- Second Method str_replace -->
<?php
$text = "First line \n Second line";
$html = str_replace("\n", "<br>", $text);
echo $html;
?>

