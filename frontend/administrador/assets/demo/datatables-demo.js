// Call the dataTables jQuery plugin
$(document).ready(function () {
  $("#tabla_completa_materias").DataTable();
  // JSON structure for each row in this example:
  //   {
  //      "engine": {value},
  //      "browser": {value},
  //      "platform": {value},
  //      "version": {value},
  //      "grade": {value}
  //   }
});
