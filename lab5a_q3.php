<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $height) {
            return $width * $height;
        }

        // Define the width and height of the rectangle
        $width = 20;
        $height = 10;

        // Call the function and store the result
        $area = calculateArea($width, $height);

        // Display the result
        echo "<p>The area of a rectangle with a width of $width and $height is $area</p>";
    ?>
</body>
</html>
