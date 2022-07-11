<?php
  session_start();
  if (!$_SESSION["logged_in"]){
    require("session.php");
    header('Location: log-in.php');
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DeltaX | Assignment - Kabir Shaikh</title>
    <link href="../bootstrap-5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap-5.2.0/js/bootstrap.bundle.min.js"></script>
    <style media="screen">
      ::-webkit-scrollbar{
        width: 10px;
        height:10px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 5px;
      }
      ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 5px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #555;
      }
    </style>
  </head>
  <body>
    <?php
      require("header.php");
    ?>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <?php
          require("home-pane.php");
        ?>
      </div>
      <div class="tab-pane fade" id="add-new-song-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <?php
          require("add-new-song-pane.php");
        ?>
      </div>
    </div>
  </body>
</html>
