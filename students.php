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
            <div class="container">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Hostel</th>
                    <th scope="col">Fee cleared</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="list-profile"
            role="tabpanel"
            aria-labelledby="list-profile-list"
          >
            <div class="container">
              <form class="jumbotron">
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
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="fee">Fee Cleared</label>
                  <select class="custom-select" id="fee" name="fee">
                    <option selected>Open this select menu</option>
                    <option value="1">True</option>
                    <option value="0">False</option>
                  </select>
                </div>

                <button
                  type="submit"
                  class="btn btn-primary btn-block btn-lg"
                  name="submitbtn"
                >
                  Add
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
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
  </body>
</html>
