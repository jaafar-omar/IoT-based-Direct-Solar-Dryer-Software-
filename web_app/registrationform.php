<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <!--create an account pupper pasrt-->
          <div class="panel-heading text-center">
            <h1>Create an Account</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="firstName"></label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                  placeholder="Enter Firstname"
                  required
                />
              </div>
              <div class="form-group">
                <label for="lastName"></label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                  placeholder="Enter Firstname"
                  required
                />
              </div>
              <div class="form-group">
                <label for="email"></label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter Email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Enter Password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="passRepeat"></label>
                <input
                  type="password"
                  class="form-control"
                  id="passRepeat"
                  name="passRepeat"
                  placeholder="Confirm Password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="number"></label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                  placeholder="Enter Phone Number"
                  required
                /> <br>
              </div>
              <input type="submit" class="btn btn-primary" /> 
            </form> 
             <!-- Put a hover login lower part -->
             
           <div class="text-center">
              <a class="small" href="login.html">Already have an account? Login!</a>
          </div>
            <hr>
          <div class="panel-footer text-right">
            <small>IOT-BASED DIRECT SOLAR DRYER</small>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>