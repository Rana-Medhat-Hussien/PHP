<?php
// Sample array with associative keys
$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'track' => 'Science'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'track' => 'AAST'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'track' => 'AAST'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'track' => 'Science'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'track' => 'AAST'],
];

// Function to generate an HTML table from an array
function generateTable($array) {
    // Create the table
    echo "<table border='1' cellpadding='5' cellspacing='0'>";

    // Table header
    echo "<tr><th>Name</th><th>Email</th><th>Track</th></tr>";

    // Loop through the array and create rows
    foreach ($array as $rowIndex => $row) {
        // Highlight the row where track = "PHP"
        $isPHP = (isset($row['track']) && $row['track'] === "Science");
        
        $rowStyle = $isPHP ? " style='background-color: #ADD8E6;' " : "";

        // Start creating a new table row with optional styling
        echo "<tr$rowStyle>";

        // Loop through each cell in the row and output it
        foreach ($row as $key => $cell) {
            // Use <td> (table data) for all rows (header is already handled outside)
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

// Call the function to generate the table
generateTable($students);
?>
