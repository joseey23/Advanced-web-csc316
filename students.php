<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Students | Elite Hostels</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/hostels.css" />
  </head>
  <body>
    <?php include "partials/nav.php";?>
    <div class="row">
      <div class="col-4">
        <div class="list-group list-group-flush" id="list-tab" role="tablist">
          <a
            class="list-group-item list-group-item-action active"
            id="list-home-list"
            data-toggle="list"
            href="#list-home"
            role="tab"
            aria-controls="home"
            >View Students</a
          >
          <a
            class="list-group-item list-group-item-action"
            id="list-profile-list"
            data-toggle="list"
            href="#list-profile"
            role="tab"
            aria-controls="profile"
            >Add Student</a
          >
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="list-home"
            role="tabpanel"
            aria-labelledby="list-home-list"
          >
           <?php
$connection = mysqli_connect("localhost", "root", "", "elite");
$result = mysqli_query($connection, "SELECT * FROM students");
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>
              <table class='table table-striped table-bordered'>
                <thead>
                  <tr>
                    <th scope='col'#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Hostel</th>
                    <th scope='col'>Fee cleared</th>
                    <th scope='col'>Operations</th>
                  </tr>
                </thead>
                <tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                    <th scope="row">' . $row['id'] . '</th>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['hostel'] . '</td>
                    <td>' . (($row["fee_cleared"] == 0) ? "False" : "True") . '</td>
                    <td>
                      <i class="fa fa-fw fa-edit text-link" onclick="showUpdateModal(' . "'$row[id]','$row[name]','$row[hostel]','$row[fee_cleared]'" . ')"></i>
                      <i class="fa fa-fw fa-trash" onclick="deleteStudent(' . "'$row[id]'" . ')"></i>
                    </td>
                  </tr>';
    }
    echo "</tbody>
              </table>
            </div>";
}
?>

          </div>
          <div
            class="tab-pane fade"
            id="list-profile"
            role="tabpanel"
            aria-labelledby="list-profile-list"
          >
            <div class="container">
              <form id="addform" class="jumbotron">
                <div class="form-group">
                  <label for="id">Student ID</label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="id"
                    name="id"
                    placeholder="Enter student id"
                  />
                </div>
                <div class="form-group">
                  <label for="name">Student name</label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="name"
                    name="name"
                    placeholder="Enter student name"
                  />
                </div>
                <div class="form-group">
                  <label for="hostel">Hostel</label>
                  <select class="custom-select" id="hostel" name="hostel">
                    <option selected>Open this select menu</option>
                    <?php
$connection = mysqli_connect("localhost", "root", "", "elite");
$result = mysqli_query($connection, "SELECT * FROM hostels");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='$row[id]'>$row[name]</option>";
    }
} else {
    echo "<option value=''>Please add some hostels</option>";
}
?>

                  </select>
                </div>
                <div class="form-group">
                  <label for="fee">Fee Cleared</label>
                  <select class="custom-select" id="fee" name="fee">
                    <option selected>Open this select menu</option>
                    <option value="true">True</option>
                    <option value="false">False</option>
                  </select>
                </div>

                <button
                  type="submit"
                  class="btn btn-primary btn-block btn-lg"
                  name="submitbtn"
                >
                  Add student
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalTitle">Update student record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        <form id="updateform" class="jumbotron">
                <div class="form-group">
                  <label for="id">Student ID</label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="id"
                    name="id"
                    placeholder="Enter student id"
                  />
                </div>
                <div class="form-group">
                  <label for="name">Student name</label>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    id="name"
                    name="name"
                    placeholder="Enter student name"
                  />
                </div>
                <div class="form-group">
                  <label for="hostel">Hostel</label>
                  <select class="custom-select" id="hostel" name="hostel">
                    <option selected>Open this select menu</option>
                    <?php
$connection = mysqli_connect("localhost", "root", "", "elite");
$result = mysqli_query($connection, "SELECT * FROM hostels");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='$row[id]'>$row[name]</option>";
    }
} else {
    echo "<option value=''>Please add some hostels</option>";
}
?>

                  </select>
                </div>
                <div class="form-group">
                  <label for="fee">Fee Cleared</label>
                  <select class="custom-select" id="fee" name="fee">
                    <option selected>Open this select menu</option>
                    <option value="true">True</option>
                    <option value="false">False</option>
                  </select>
                </div>

                <button
                  type="submit"
                  class="btn btn-primary btn-block btn-lg"
                  name="updatebtn"
                  id="updatebtn"
                >
                  Update student
                </button>
                  <button type="button" class="btn btn-secondary btn-block btn-lg" data-dismiss="modal">Cancel</button>
              </form>
        </div>
      </div>

    </div>
  </div>
</div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="js/student.js"></script>
  </body>
</html>
