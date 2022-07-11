<div class="modal fade" id="add-new-artist-modal" tabindex="-1" arial-labelledby="add-new-artist-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Artist</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container mx-auto">
        <div class="modal-body">
          <form action="" method="post">
            <label for="artist-name">Artist Name: </label>
            <input type="text" name="artist-name" value="">
            <div>
              <?php echo $error["artist-name"]; ?>
            </div>
            <label for="artist-dob">Artist Date of Birth: </label>
            <input type="text" name="artist-dob" value="">
            <div>
              <?php echo $error["artist-date-of-birth"]; ?>
            </div>
            <label for="artist-bio">Artist Bio: </label>
            <textarea class="form-control"></textarea>

            <button class="btn btn-secondary" type="button" name="button">Add Artist</button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button" name="button">Cancel</button>
        <button class="btn btn-secondary" type="button" name="button">Add Artist</button>
      </div>
    </div>
  </div>
</div>
