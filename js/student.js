$(document).ready(function() {
  $("#addform").submit(function(ev) {
    ev.preventDefault();
    var id = ev.target["id"].value;
    var name = ev.target["name"].value;
    var hostel = ev.target["hostel"].value;
    var fee = ev.target["fee"].value;

    var data = {
      student: {
        id,
        name,
        hostel,
        fee
      }
    };
    $.post("control.php", data, function(registered) {
      // let data = JSON.parse(response);
      console.log(`registered ${registered}`);
      if (registered) {
        alert("Student added");
        window.location.reload();
      } else {
        alert("Failed to add student");
      }
    });
  });
});
function deleteStudent(id) {
  var data = {
    deletestudent: {
      id
    }
  };
  $.post("control.php", data, function(deleted) {
    // let data = JSON.parse(response);
    console.log(`deleted ${deleted}`);
    if (deleted) {
      alert("Student deleted");
      window.location.reload();
    } else {
      alert("Failed to delete student");
    }
  });
}
function showUpdateModal(id, name, hostel, feeCleared) {
  const updateModal = $("#updateModal");
  updateModal.modal("show");
  updateModal.on("shown.bs.modal", function(e) {
    const form = $("#updateform")[0];

    form["id"].value = id;
    form["name"].value = name;
    form["hostel"].value = hostel;
    form["fee"].value = feeCleared == 0 ? false : true;

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var id = ev.target["id"].value;
      var name = ev.target["name"].value;
      var hostel = ev.target["hostel"].value;
      var fee = ev.target["fee"].value;

      var data = {
        updatestudent: {
          id,
          name,
          hostel,
          fee
        }
      };
      $.post("control.php", data, function(registered) {
        // let data = JSON.parse(response);
        console.log(`registered ${registered}`);
        if (registered) {
          alert("Student updated");
          window.location.reload();
        } else {
          alert("Failed to update student");
        }
      });
    });
  });
}
