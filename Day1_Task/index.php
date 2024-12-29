<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1 </title>
</head>

<body>

<h1>Hello Task 1 PHP</h1>

<?php
// Show your phpinfo on browser..
//phpinfo();

//Use constants to display your website name which mustn’t change across your pages.
// define("websiteName", "Task 1");
// echo websiteName;

//Show your server name, address, port,filename and path of the currently executing script.
// . (Concatenation): Joins the first string ("<p>Server Name: ") with the value of $_SERVER['SERVER_NAME'].
echo "<p>Server Name: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>Server Address: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Server Port: " . $_SERVER['SERVER_PORT'] . "</p>";
echo "<p>Current Filename: " . basename($_SERVER['PHP_SELF']) . "</p>";
echo "<p>Script Path: " . $_SERVER['SCRIPT_FILENAME'] . "</p>";

//-   Your brother is 10 years old, If you know that :
// age less than 5 --> Print Msg --> Stay at home,
// age equal 5 --> Print Msg --> Go to Kindergarden,
// age between 6 & 12 --> Print Msg --> Go to grade :XXX
// (Use switch case).
// $brotherAge = 10; 

// switch (true) {
//     case ($brotherAge < 5):
//         echo "Stay at home";
//         break;
//     case ($brotherAge === 5):
//         echo "Go to Kindergarden";
//         break;
//     case ($brotherAge >= 6 && $brotherAge <= 12):
//         $grade = $brotherAge - 6; // Calculate grade based on age
//         echo "Go to grade: $grade";
//         break;
//     default:
//         echo "Invalid age for this scenario";
//         break;
//     }
?>    
</body>

</html>


