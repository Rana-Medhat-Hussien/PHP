<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>

    <style>
        .error {color: #FF0000;}
    </style>

</head>
<body>
<?php
// Define variables and set to empty values
$name = $email = $group = $classDetails = $gender = $courses = $agree = "";
$nameErr = $emailErr = $genderErr = $agreeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if required fields are empty
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        // retrieve the value of the name input field from the form when the form is submitted
        $name = test_input($_POST["name"]);
        // Validate that name contains only letters
        if (!preg_match("/^[a-zA-Z]+$/", $name)) {
            $nameErr = "Only letters are allowed in the name.";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "E-mail is required.";
    } else {
        $email = test_input($_POST["email"]);

        // Validate that the email has a valid format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    if (empty($_POST["group"])) {
        $group = "";
    } else {
        $group = test_input($_POST["group"]);
    }

    if (empty($_POST["classDetails"])) {
        $classDetails = "";
    } else {
        $classDetails = test_input($_POST["classDetails"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required.";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["courses"])) {
        $courses = [];
    } else {
        $courses = array_map('test_input', $_POST["courses"]);
    }

    if (empty($_POST["agree"])) {
        $agreeErr = "You must agree to the terms.";
    } else {
        $agree = test_input($_POST["agree"]);
    }
}

// Function to sanitize input data
function test_input($data) {
    //This removes any whitespace (or other characters like tabs or newlines)
    // from the beginning and end of the string.
    $data = trim($data);
    //This removes backslashes (\) from the input string. 
    $data = stripslashes($data);
    //This converts special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Application name: AAST_BIC class registration</h2>
<p><span class="error">* Required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    <fieldset>
        <table>
            <tr>
                <td><label for="name">Name:</label></td>
                <td>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                </td>
            </tr>

            <tr>
                <td><label for="email">E-mail:</label></td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                </td>
            </tr>

            <tr>
                <td><label for="group">Group #:</label></td>
                <td><input type="text" id="group" name="group" value="<?php echo $group; ?>"></td>
            </tr>

            <tr>
                <td><label for="classDetails">Class details:</label></td>
                <td><textarea id="classDetails" name="classDetails" rows="5" cols="40"><?php echo $classDetails; ?></textarea></td>
            </tr>

            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>>Female
                    <input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>>Male
                    <span class="error">* <?php echo $genderErr;?></span>
                </td>
            </tr>

            <tr>
                <td><label for="courses">Select Courses:</label></td>
                <td>
                    <select id="courses" name="courses[]" multiple size="4">
                    <option value="PHP" <?php echo (isset($_POST["courses"]) && in_array("PHP", $_POST["courses"])) ? "selected" : ""; ?>>PHP</option>
                    <option value="JavaScript" <?php echo (isset($_POST["courses"]) && in_array("JavaScript", $_POST["courses"])) ? "selected" : ""; ?>>JavaScript</option>
                    <option value="MySQL" <?php echo (isset($_POST["courses"]) && in_array("MySQL", $_POST["courses"])) ? "selected" : ""; ?>>MySQL</option>
                    <option value="HTML" <?php echo (isset($_POST["courses"]) && in_array("HTML", $_POST["courses"])) ? "selected" : ""; ?>>HTML</option>
                    <option value="CSS" <?php echo (isset($_POST["courses"]) && in_array("CSS", $_POST["courses"])) ? "selected" : ""; ?>>CSS</option>
                    <option value="Apache" <?php echo (isset($_POST["courses"]) && in_array("Apache", $_POST["courses"])) ? "selected" : ""; ?>>Apache</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="agree">Agree</label></td>
                <td>
                    <input type="checkbox" name="agree" <?php echo ($agree) ? 'checked' : ''; ?>>
                    <span class="error">* <?php echo $agreeErr;?></span>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </fieldset>    
</form>

<?php
// If no errors, display the submitted values
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($agreeErr) && $_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your given values are as:</h2>";
    echo "Name: " . $name . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "Group #: " . $group . "<br>";
    echo "Class details: " . $classDetails . "<br>";
    echo "Gender: " . $gender . "<br>";
    echo "Your courses: " . implode(', ', $courses) . "<br>";
}
?>

</body>
</html>
