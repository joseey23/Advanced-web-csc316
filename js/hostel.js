$(document).ready(function() {
  $("addForm").submit(function(ev) {
    ev.preventDefault();
    var capacity = ev.target["capacity"].value;
    var name = ev.target["name"].value;
    console.log(capacity, name);
    var data = {
      hostel: {
        capacity: capacity,
        name: name
      }
    };
    $.post("control.php", data, function(registered) {
      // let data = JSON.parse(response);
      console.log(`registered ${registered}`);
      if (registered) {
        alert("Hostel added");
        window.location.reload();
      } else {
        alert("Failed to add hostel");
      }
    });
  });
});
function deleteHostel(id) {
  var data = {
    deletehostel: {
      id
    }
  };
  $.post("control.php", data, function(deleted) {
    // let data = JSON.parse(response);
    console.log(`deleted ${deleted}`);
    if (deleted) {
      alert("Hostel deleted");
      window.location.reload();
    } else {
      alert("Failed to delete hostel");
    }
  });
}
function showUpdateModal(id, name, occupied, capacity) {
  const updateModal = $("#updateModal");
  updateModal.modal("show");
  updateModal.on("shown.bs.modal", function(e) {
    const form = $("#updateForm")[0];

    form["name"].value = name;
    form["occupied"].value = occupied;
    form["capacity"].value = capacity;

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();

      var name = ev.target["name"].value;
      var occupied = ev.target["occupied"].value;
      var capacity = ev.target["capacity"].value;

      var data = {
        updatehostel: {
          id,
          name,
          occupied,
          capacity
        }
      };
      $.post("control.php", data, function(updated) {
        // let data = JSON.parse(response);
        console.log(`updated ${updated}`);
        if (updated) {
          alert("Hostel updated");
          window.location.reload();
        } else {
          alert("Failed to update hostel");
        }
      });
    });
  });
}
