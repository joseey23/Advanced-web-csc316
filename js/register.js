$(document).ready(function() {
  $("form").submit(function(ev) {
    ev.preventDefault();
    var email = ev.target["email"].value;
    var name = ev.target["name"].value;
    var password = ev.target["password"].value;
    var data = {
      register: {
        email: email,
        name: name,
        password: password
      }
    };
    $.post("control.php", data, function(registered) {
      // let data = JSON.parse(response);
      console.log(`registered ${registered}`);
      if (registered) {
        window.location.replace("./login.php");
      } else {
        alert("Failed to register");
      }
    });
  });
});
