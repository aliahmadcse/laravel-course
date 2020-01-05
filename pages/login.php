<?php
session_start();
// if (isset($_SESSION["msj_sign_up"])) {
//     echo $_SESSION["msj_sign_up"];
//     unset($_SESSION["msj_sign_up"]);
// }
// if (isset($_SESSION["error_login"])) {
//     echo $_SESSION["error_login"];
//     unset($_SESSION["error_login"]);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>
    <?php if (isset($_SESSION["error_login"])) { ?>
        <div class="error">
            <p><?php echo $_SESSION['error_login']; ?></p>
            <?php unset($_SESSION["error_login"]); ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['msj_sign_up'])) { ?>
        <div class="error">
            <p><?php echo $_SESSION['msj_sign_up']; ?></p>
            <?php unset($_SESSION["msj_sign_up"]); ?>
        </div>
    <?php } ?>
    <center class="user-form">
        <h2>Login Page</h2>
        <form action="../process/process_login.php" method="POST">
            <table>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Enter password</td>
                    <td><input type="password" name="password"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="login" name="std_login"> </td>
                </tr>
            </table>
            <div class="link">
                <a href="sign_up.php">Create Account</a>
            </div>
        </form>

    </center>
</body>

</html>