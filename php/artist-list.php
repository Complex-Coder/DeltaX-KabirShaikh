<?php
  $MYSQLI_username = "kabir";
  $MYSQLI_password = "Password@1234";
  $MYSQLI_host = "localhost";
  $MYSQLI_database = "assignment";

  $connection = mysqli_connect($MYSQLI_host,$MYSQLI_username,$MYSQLI_password,$MYSQLI_database);
  if (!$connection) {
    echo "Not ale to connect to database: " . mysqli_connect_error();
  }else {
    $sql_retrieve_query = "SELECT artist_name FROM artists";
    $result = mysqli_fetch_all(mysqli_query($connection,$sql_retrieve_query),MYSQLI_ASSOC);
    if ($result) {
      print_r($result);
    }
  }

  $artist_list = array();
  for ($i=0; $i < count($result) ; $i++) {
    $checkbox = '<li>
      <div class="dropdown-item">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="checkbox[]">
          <label class="form-check-label" for="flexCheckDefault">
            ' . $result[$i]["artist_name"] . '
          </label>
        </div>
      </div>
    </li>';
    echo $checkbox;
  }
?>
