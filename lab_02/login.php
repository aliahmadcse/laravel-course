<?php
session_start();
if (isset($_SESSION["msj_sign_up"])) {
    echo $_SESSION["msj_sign_up"];
    unset($_SESSION["msj_sign_up"]);
}
if (isset($_SESSION["error_login"])) {
    echo $_SESSION["error_login"];
    unset($_SESSION["error_login"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <center>
        <h2>Login Page</h2>
        <form action="process_login.php" method="POST">
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
                    <td><input type="submit" value="login" name="std_login"> </td>
                    <td><a href="sign_up.php">Create Account</a></td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>