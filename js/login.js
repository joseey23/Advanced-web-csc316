$(document).ready(function() {
  $("form").submit(function(ev) {
    ev.preventDefault();
    var email = ev.target["email"].value;
    var password = ev.target["password"].value;
    var data = {
      login: {
        email: email,
        password: password
      }
    };
    $.post("control.php", data, function(response) {
      //let data = JSON.parse(response);
      console.log(response);
      switch (response) {
        case "Authenticated":
          window.location.replace("./home.php");
          break;
        case "Invalid password":
          alert("Invalid Password");
          break;
        default:
          alert(response);
          break;
      }
      // if (registered) {
      //   window.location.replace("./home.php");
      // } else {
      //   alert("Failed to login");
      // }
    });
  });
});
