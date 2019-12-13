<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Records</title>
</head>

<body>
    <center>
        <table border="1">
            <h1>All Student Data</h1>
            <tbody>
                <tr>
                    <th>Student Name</th>
                    <th>Father's Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Phone Number</th>
                    <th>Date Time</th>
                </tr>
                <?php
                require "db.php";
                $query = "SELECT * FROM students";
                $qry_result = mysqli_query($conn, $query);
                if (isset($qry_result) && $qry_result != "") {
                    while ($row = mysqli_fetch_assoc($qry_result)) {
                        ?>
                        <tr>
                            <td><?php echo $row["std_name"] ?></td>
                            <td><?php echo $row["std_father_name"] ?></td>
                            <td><?php echo $row["std_email"] ?></td>
                            <td><?php echo $row["std_gender"] ?></td>
                            <td><?php echo $row["std_country"] ?></td>
                            <td><?php echo $row["std_mobile_number"] ?></td>
                            <td><?php echo $row["dated"] ?></td>
                        </tr>

                <?php }
                } ?>

            </tbody>
        </table>
    </center>
</body>

</html>