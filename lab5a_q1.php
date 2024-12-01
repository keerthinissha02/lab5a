<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a q1</title>
</head>
<body>
    <?php 
        $name = "Keerthinissha";
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a q1</title>
</head>
<body>
    <?php 
        // Variables for your details
        $name = "Keerthinissha Anathan";
        $matric_number = "CI230033";
        $course = "Cybersecurity";
        $year_of_study = "2";
        $address = "14, Jalan Bukit Mertajam, Pulau Pinang";
    ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
</body>
</html>
