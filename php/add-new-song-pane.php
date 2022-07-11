<div class="container mx-auto" id="add-new-song-page">
  <h3>Add New Song</h3>
  <?php
    echo "Entered Add new Song Pane Pane";
    $error = ["song-name" => "", "song-artists" => "", "artist-name" => "", "artist-date-of-birth" => ""];
  ?>
  <form action="#" method="post">

    <label for="song-name">Song Name: </label>
    <input type="text" name="song-name" value="">
    <div>
      <?php echo $error["song-name"]; ?>
    </div>

    <label for="song-release-date">Song Release Date: </label>
    <input type="text" name="song-release-date" value="">
    <div>
      <?php echo $error["song-name"]; ?>
    </div>

    <label for="song-artists">Artists: </label>
    <div class="dropdown-center">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <?php
          require("artist-list.php")
        ?>
      </ul>
    </div>

    <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#add-new-artist-modal" name="add-new-artists">Add new Artist</button>
    <?php
      require("add-new-artist-modal.php")?>

    <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupFile01">Upload Song Cover Image</label>
      <input type="file" class="form-control" id="inputGroupFile01">
    </div>

    <input type="submit" name="cancel" value="Cancel">
    <input type="submit" name="add-song" value="Add-Song">
  </form>
</div>
