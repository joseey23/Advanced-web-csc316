$(document).ready(function() {
  $("#logoutbtn").click(function() {
    $.post(
      "control.php",
      {
        logout: {}
      },
      function(loggedout) {
        window.location.replace("./login.php");
      }
    );
  });
});
