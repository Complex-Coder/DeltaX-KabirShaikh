<div class="container" style="padding: 0px;">
  <div class="top-10" style="margin:25px 50px;height:240px;overflow-y:scroll;">
    <h3>Top 10 Songs</h1>
      <br>
      <table class="table" style="height:250px;overflow:scroll;">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Artwork</th>
            <th scope="col">Song</th>
            <th scope="col">Date of Release</th>
            <th scope="col">Artists</th>
            <th scope="col">Rate</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i=0; $i < 10; $i++) {
            echo '<tr>
            <th scope="row">'.($i+1).'</th>
            <td>
            <img src="../images/Elley_Duhe_-_Middle_of_the_Night.png" alt="" style="height:100px;">
            </td>
            <td>Middle of the Night</td>
            <td>10, January, 2020</td>
            <td>Elley Duhe</td>
            <td></td>
            </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
    <br>
    <div class="top-10" style="margin:25px 50px;height:240px;overflow-y:scroll;">
      <h3>Top 10 Artists</h1>
        <br>
        <table class="table" style="height:250px;overflow:scroll;">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Artist</th>
              <th scope="col">Date of Birth</th>
              <th scope="col">Songs</th>
            </tr>
          </thead>
          <tbody>
            <?php
          $artist_name = "Elley Duhe";
          for ($i=0; $i < 10; $i++) {
            echo '<tr>
            <th scope="row">'.($i+1).'</th>
            <td>
            '.$artist_name.'
            </td>
            <td>Middle of the Night</td>
            <td>10, January, 2020</td>
          </tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
</div>
