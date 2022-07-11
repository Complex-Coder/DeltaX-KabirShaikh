<?php
  session_start();
  $error = array("email" => "","password" => "");
  if (isset($_POST["log-in"])) {
    if (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
      //If the email is valid
      $email = htmlspecialchars($_POST["email"]);
      $error["email"] = "";
    }
    else {
      //If the email is invalid.
      $email = $_POST["email"];
      $error["email"] = "Please enter a valid email.";
    }
    if (preg_match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$^", $_POST["password"])) {
      $password = htmlspecialchars($_POST["password"]);
      $error["password"] = "";
    }else {
      $password = $_POST["password"];
      $error["password"] = "Password should have: <br>minimum eight and maximum 10 characters, <br>at least one uppercase letter, <br>one lowercase letter, <br>one number and one special character";
    }

    $input_email = "'" . htmlspecialchars($email) . "'";
    $input_password = "'" . htmlspecialchars($password) . "'";

    $MYSQLI_username = "kabir";
    $MYSQLI_password = "Password@1234";
    $MYSQLI_host = "localhost";
    $MYSQLI_database = "assignment";

    $connection = mysqli_connect($MYSQLI_host,$MYSQLI_username,$MYSQLI_password,$MYSQLI_database);
    if (!$connection) {
      echo "Not ale to connect to database: " . mysqli_connect_error();
    }else {
      $sql_retrieve_query = "SELECT * FROM users WHERE user_email = " . $input_email . " AND user_password = " . $input_password;
      $result = mysqli_fetch_all(mysqli_query($connection,$sql_retrieve_query),MYSQLI_ASSOC);
      if ($result) {
        print_r($result);
      }else {
        $sql_insert_query = "INSERT INTO users(user_id, user_email, user_password) VALUES (NULL,$input_email,$input_password)";
        if(mysqli_query($connection,$sql_insert_query)){
        echo "Inserted Query";
        }
      }
      $_SESSION["logged_in"] = true;
      $_SESSION["user_email"] = $input_email;
      $_SESSION["user_password"] = $input_password;
      header("Location: home.php");
    }
  }else {
    $email = "";
    $password = "";
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link href="../bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
      require('header.php');
      require('log-in-form.php');
    ?>
  </body>
</html>
