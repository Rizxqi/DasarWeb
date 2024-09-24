<?php
// Array of student grades
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sort the array in ascending order
sort($grades);

// Initialize a variable to hold the total sum
$total = 0;

// Loop through the grades and calculate the total while ignoring the two highest and two lowest
for ($i = 0; $i < count($grades); $i++) {
    // Skip the first two (lowest) and the last two (highest)
    if ($i >= 2 && $i < count($grades) - 2) {
        $total += $grades[$i]; // Add to the total
    }
}

// Display the total sum of the grades after removing the two highest and two lowest
echo "Total grades (excluding highest and lowest): $total <br>";

// Calculate the average based on the remaining grades
$average = $total / (count($grades) - 4); // We are excluding 4 grades
echo "Average grade: $average";
?>
