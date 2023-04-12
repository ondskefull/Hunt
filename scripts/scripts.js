function searchTable() {
  // Get input element and filter value
  var input = document.getElementById("myInput");
  var filter = input.value.toUpperCase();

  // Get table element and rows
  var table = document.getElementById("myTable");
  var rows = table.getElementsByTagName("tr");

  // Loop through rows and hide those that do not match the filter
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var showRow = false;

    // Loop through cells and check if any match the filter
    for (var j = 0; j < cells.length; j++) {
      var cell = cells[j];
      if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
        showRow = true;
        break;
      }
    }

    // Show or hide row based on filter match
    if (showRow) {
      rows[i].style.display = "";
    } else {
      rows[i].style.display = "none";
    }
  }

  // Show header row
  table.rows[0].style.display = "";
}
