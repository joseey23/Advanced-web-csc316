<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard | Elite Hostels</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/home.css" />
  </head>
  <body>
    <?php include "partials/nav.php";?>
    <div class="container wrapper">
      <div class="row">
        <div class="col-8">
          <div class="dashboard-items">
            <div class="dashboard_item">
              <div class="row"><h6 class="text-light">Hostels</h6></div>
              <div class="row text-light">View and manage hostels</div>
              <a href="./hostels.php" class="stretched-link"></a>
            </div>
            <div class="dashboard_item">
              <div class="row"><h6 class="text-light">Students</h6></div>
              <div class="row text-light">View and manage students</div>
              <a href="./students.php" class="stretched-link"></a>
            </div>
            <div class="dashboard_item">
              <div class="row"><h6 class="text-light">Administrators</h6></div>
              <div class="row text-light">No Updates Available</div>
              <a href="./administrators.php" class="stretched-link"></a>
            </div>
            <div class="dashboard_item">
              <div class="row"><h6 class="text-light">Updates</h6></div>
              <div class="row text-light">No Updates Available</div>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="container">
            <ul class="list-group list-group-flush actions">
              <li class="list-group-item">
                <?php echo $_SESSION['admin']['name'] ?>

              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center"
              >
                Updates
                <span class="badge badge-primary badge-pill">14</span>
              </li>

              <li id="logoutbtn" class="list-group-item">Logout</li>
            </ul>
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
    <script src="js/home.js"></script>
  </body>
</html>
