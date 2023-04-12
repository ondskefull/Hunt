<?php $page = 'traits';?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hunt - weapon traits finder</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="main containar">
      <h2>Search Weapon or Trait and get the associated item that works with that weapon. Weapons that has bayonet of sorts, have stamina enhanced traits suggested.</h2>
      <label for="myInput">Search:</label>
      <input id="myInput" onkeyup="searchTable()" type="text" aria-label="Search">
<!--
      <div class="table-responsive">
        <?php
          echo '<table id="myTable" class="table table-hover">';
          echo '<thead>
                  <tr>
                    <th scope="col">Weapon</th>
                    <th scope="col">Trait 1</th>
                    <th scope="col">Trait 2</th>
                    <th scope="col">Trait 3</th>
                    <th scope="col">Trait 4</th>
                    <th scope="col">Trait 5</th>
                    <th scope="col">Bullets</th>
                    <th scope="col">Ammo type</th>
                  </tr>
                </thead>';
          echo '<tbody>';
          foreach ($php_data['traits'] as $item) {
              echo '<tr>';
              echo '<td scope="row">' . $item['Weapon'] . '</td>';
              echo '<td>' . $item['Trait 1'] . '</td>';
              echo '<td>' . $item['Trait 2'] . '</td>';
              echo '<td>' . $item['Trait 3'] . '</td>';
              echo '<td>' . $item['Trait 4'] . '</td>';
              echo '<td>' . $item['Trait 5'] . '</td>';
              echo '<td>' . $item['Bullets'] . '</td>';
              echo '<td>' . $item['Ammo type'] . '</td>';
              echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
          ?>
      </div>
-->
      <div class="table-responsive">
        <table id="myTable" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Weapon</th>
              <th>Trait 1</th>
              <th>Trait 2</th>
              <th>Trait 3</th>
              <th>Trait 4</th>
              <th>Trait 5</th>
              <th>Bullets</th>
              <th>Ammo type</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($php_data['traits'] as $item): ?>
              <tr>
                  <td><?php echo $item['Weapon']; ?></td>
                  <td><?php echo $item['Trait 1']; ?></td>
                  <td><?php echo $item['Trait 2']; ?></td>
                  <td><?php echo $item['Trait 3']; ?></td>
                  <td><?php echo $item['Trait 4']; ?></td>
                  <td><?php echo $item['Trait 5']; ?></td>
                  <td><?php echo $item['Bullets']; ?></td>
                  <td><?php echo $item['Ammo type']; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <p>This website have the Weapons and Traits associated with each other from the game Hunt:Showdown:</p>
      <ul>
        <li>Find Weapons in Hunt:Showdown</li>
        <li>Each trait that works well with that weapon will be listed</li>
        <li>Work in progress</li>
      </ul>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>