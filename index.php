<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login</h2>
            <form class="" action="validation.php" method="post">
              <div class="form-group">
                <label >Username</label>
                <input  type="text" name="user" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input  type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" name="button" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2>Sign Up</h2>
            <form class="" action="register.php" method="post">
              <div class="form-group">
                <label >Username</label>
                <input  type="text" name="user" class="form-control" required>
              </div>
              <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" name="button" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>
