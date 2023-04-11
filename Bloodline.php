<?php $page = 'bloodline';?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hunt - Bloodline</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="main">
      <h2>Search rank-weapon-trait-tools or consumable</h2>
      <label for="myInput">Search:</label>
      <input id="myInput" onkeyup="searchTable()" type="text" placeholder="" aria-label="Search">
      <div class="table-responsive">
        <?php
          // Create HTML table
          echo '<table id="myTable" class="table table-hover table-bordered">';
          echo '<thead><tr><th>Rank</th><th>Unlock</th></tr></thead>';
          echo '<tbody>';
          foreach ($php_data['bloodline'] as $item) {
              echo '<tr>';
              echo '<td>' . $item['Rank'] . '</td>';
              echo '<td>' . implode(', ', $item['Unlock']) . '</td>';
              echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
        ?>
      </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>