<?php
  $input_email = "'" . $email . "'";
  $input_password = "'" . $password . "'";

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
      // print_r($result);
    }else {
      $sql_insert_query = "INSERT INTO users(user_id, user_email, user_password) VALUES (NULL,$input_email,$input_password)";
      if(mysqli_query($connection,$sql_insert_query)){
        // echo "Inserted Query";
      }
    $_SESSION["logged_in"] = true;
    header("Location: home.php");
    }
  }
?>
