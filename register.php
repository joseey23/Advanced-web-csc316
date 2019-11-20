<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register | Elite Hostels</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <div class="container wrapper">
      <div class="row">
        <div class="col-sm left">
          <div class="shadow-sm p-3 mb-5 bg-white rounded jumbotron">
            <form class="jumbotron">
              <div class="form-group">
                <label for="name">Full Name</label>
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="name"
                  name="name"
                  placeholder="Enter your full name"
                />
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input
                  type="email"
                  class="form-control form-control-lg"
                  id="email"
                  name="email"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                />
                <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small
                >
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control form-control-lg"
                  id="password"
                  name="password"
                  placeholder="Password"
                />
              </div>

              <button
                type="submit"
                class="btn btn-primary btn-block btn-lg"
                name="submitbtn"
              >
                Register
              </button>

              <a href="./login.php" class="btn btn-link btn-block btn-lg"
                >Already have an account</a
              >
            </form>
          </div>
        </div>
        <div class="col-sm right">
          <h2>Joseey's Management System</h2>
          <p>Buy today and get 20% off!!</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Easily customizable</li>
            <li class="list-group-item">Lifetime updates</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
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
    <script src="js/register.js"></script>
  </body>
</html>
