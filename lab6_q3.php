<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    // Define the function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Call the function with example values
    $length = 5; // Example length
    $width = 10; // Example width
    $area = calculateArea($length, $width);

    // Display the result
    echo "<p>The area of the rectangle with length $length and width $width is: $area</p>";
    ?>
</body>
</html>
