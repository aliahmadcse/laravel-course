<?php
session_start();

if (isset($_GET["sid"])) {
    require_once "db.php";
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
            <title>Update Student Record</title>
        </head>

        <body>
            <center>
                <h1>Edit Info</h1>
                <form action="process_edit.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                Student Full Name
                            </td>
                            <td>
                                <input type="text" name="name" value="<?= $row["std_name"]?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Father Name
                            </td>
                            <td>
                                <input type="text" name="fatherName" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email Name
                            </td>
                            <td>
                                <input type="email" name="email" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mobile Number
                            </td>
                            <td>
                                <input type="number" name="phone" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gender
                            </td>
                            <td>
                                Male<input type="radio" name="gender" value="male" />
                                Female<input type="radio" name="gender" value="female" />
                                Others<input type="radio" name="gender" value="others" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Country
                            </td>
                            <td>
                                <select name="country">
                                    <option value="null" selected disabled>Select one option</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="china">China</option>
                                    <option value="turky">Turky</option>
                                </select>
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