<?php
session_start();

if (isset($_SESSION["msj"])) {
  echo $_SESSION["msj"];
  unset($_SESSION["msj"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Sign-UP</title>
</head>

<body>
  <center>
    <h2>Sign-up Form</h2>
    <form action="process.php" method="POST">
      <table>
        <tbody>
          <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" /></td>
          </tr>
          <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" /></td>
          </tr>
          <tr>
            <td>Date of birth</td>
            <td><input type="date" name="date_of_birth" /></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td>
              Male<input type="radio" name="gender" value="male" />
              Female<input type="radio" name="gender" value="female" />
              Other<input type="radio" name="gender" value="other" />
            </td>
          </tr>
          <tr>
            <td>Mobile Number</td>
            <td><input type="number" name="phone_no" /></td>
          </tr>
          <tr>
            <td>Country</td>
            <td>
              <select name="country">
                <option value="" selected disabled>Select one option</option>
                <option value="pakistan">Pakistan</option>
                <option value="china">China</option>
                <option value="turkey">Turkey</option>
              </select>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="Sign Up" name="signup_form" />
            </td>
          </tr>
        </tbody>
      </table>
    </form>
  </center>
</body>

</html>