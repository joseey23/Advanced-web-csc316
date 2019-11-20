<?php
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hostels | Elite Hostels</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/administrators.css" />
  </head>
  <body>
    <?php include "partials/nav.php";?>
    <?php
$connection = mysqli_connect("localhost", "root", "", "elite");
$result = mysqli_query($connection, "SELECT * FROM admins");
if (mysqli_num_rows($result) > 0) {
    echo "<div class='container'>
              <table class='table table-striped table-bordered'>
                <thead>
                  <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Name</th>
                    <th scope='col'>Email</th>
                  </tr>
                </thead>
                <tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <th scope="row">' . $row['id'] . '</th>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>

              </tr>';
    }
    echo "</tbody>
              </table>
            </div>";
}
?>
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
    <script src="js/hostel.js"></script>
  </body>
</html>
