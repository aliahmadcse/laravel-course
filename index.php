<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION['logged_in'] != "true") {
  header("location:pages/login.php");
}

if (isset($_SESSION["msj"])) {
  echo $_SESSION["msj"];
  unset($_SESSION["msj"]);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <center>
    <h2>Registration Form</h2>
    <form action="process/process.php" method="POST">
      <table>
        <tr>
          <td>
            Student Full Name
          </td>
          <td>
            <input type="text" name="name" />
          </td>
        </tr>
        <tr>
          <td>
            Father Name
          </td>
          <td>
            <input type="text" name="father_name" />
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
            <input type="number" name="mobile_number" />
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
            <input type="submit" value="Enter" name="student_form" />
          </td>
        </tr>
      </table>
    </form>
    <a href="pages/records.php">Records</a>|
    <a href="process/process_logout.php">Logout</a>
  </center>
</body>

</html>