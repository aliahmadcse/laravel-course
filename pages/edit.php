<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION['logged_in'] != "true") {
    header("location:login.php");
}
if (isset($_GET["sid"])) {
    require_once "../shared/db.php";
    $sid = $_GET["sid"];

    $query = "SELECT * FROM students where std_id='$sid'";
    $qry_result = mysqli_query($conn, $query);
    if (isset($qry_result) && $qry_result != "") {
        $row = mysqli_fetch_assoc($qry_result)

?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="../css/style.css">
            <title>Update Student Record</title>
        </head>

        <body>
            <center>
                <h1>Edit Info</h1>
                <form action="../process/process_edit.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                Student Full Name
                            </td>
                            <td>
                                <input type="text" name="name" value="<?= $row["std_name"] ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Father Name
                            </td>
                            <td>
                                <input type="text" name="fatherName" value="<?= $row["std_father_name"] ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email Name
                            </td>
                            <td>
                                <input type="email" name="email" value="<?= $row["std_email"] ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mobile Number
                            </td>
                            <td>
                                <input type="number" name="phone" value="<?= $row["std_mobile_number"] ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender
                            </td>
                            <td>
                                Male<input type="radio" name="gender" value="male" <?php if ($row["std_gender"] == "male") { ?> checked <?php } ?> />
                                Female<input type="radio" name="gender" value="female" <?php if ($row["std_gender"] == "female") { ?>checked <?php } ?> />
                                Others<input type="radio" name="gender" value="others" <?php if ($row["std_gender"] == "others") { ?>checked <?php } ?> />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Country
                            </td>
                            <td>
                                <select name="country">
                                    <option value="null" selected disabled>Select one option</option>
                                    <option value="pakistan" <?php if ($row["std_country"] == "pakistan") { ?> selected <?php } ?>>Pakistan</option>
                                    <option value="china" <?php if ($row["std_country"] == "china") { ?> selected <?php } ?>>China</option>
                                    <option value="turky" <?php if ($row["std_country"] == "turkey") { ?> selected <?php } ?>>Turky</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="sid" value="<?php echo $sid; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Update" name="edit_form" />
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </body>

        </html>

<?php
    }
} else {
    $_SESSION["msg_edit"] = "Choose a record to edit";
    header("location:records.php");
}
?>