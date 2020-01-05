<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign Up</title>
</head>

<body>
    <?php if (isset($_SESSION["error_password"])) { ?>
        <div class="error">
            <p><?php echo $_SESSION['error_password']; ?></p>
            <?php unset($_SESSION["error_password"]); ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION["email_error"])) { ?>
        <div class="error">
            <p><?php echo $_SESSION['email_error']; ?></p>
            <?php unset($_SESSION["email_error"]); ?>
        </div>
    <?php } ?>
    <center class='user-form sign-up-form'>
        <h2>Sign Up</h2>
        <form action="../process/process_sign_up.php" method="POST">
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
                    <td>Confirm Password</td>
                    <td><input type="password" name="confirm_password"> </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Sign Up" name="std_sign_up"> </td>
                </tr>
            </table>
            <div class="link">
                <a href="login.php">Login</a>
            </div>
        </form>
    </center>
</body>

</html>