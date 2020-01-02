<?php
session_start();
if (isset($_SESSION["error_password"])) {
    echo $_SESSION["error_password"];
    unset($_SESSION["error_password"]);
}
if (isset($_SESSION["email_error"])) {
    echo $_SESSION["email_error"];
    unset($_SESSION["email_error"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<body>
    <center>
        <h2>Sign Up</h2>
        <form action="process_sign_up.php" method="POST">
            <table border="1">
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Enter password</td>
                    <td><input type="password" name="password"> </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirm_password"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Sign Up" name="std_sign_up"> </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>