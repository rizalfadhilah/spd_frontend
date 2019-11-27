<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
 

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('images/loginwp.jpg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

#login{
  border-radius: 0px; background-color: black; color: white;
}
#input{
  border-radius: 0px;
  border: black 1px solid;
  text-align: center;
}
</style>
<body>
  <div class="container-fluid">
    <div class="row no-gutter">
      
      <div class="d-none d-md-flex col-md-4 col-lg-8 bg-image">
        <img src="images/logo-sc.png" style="position: absolute; top: 50%; left: 50%;  transform: translate(-50%, -50%); width: 270px; height: 25px">
      </div>
      
      <div class="col-md-8 col-lg-4" style="">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <div class="text-center"> 
                  <h2><b>Log In</b></h2>
                  <h6 style="color: #a9a9a9">to your account</h6>
                </div>
                <form>
                  <div class="form-group">
                    <input type="email" id="input" class="form-control" placeholder="Email Address" required autofocus>
                  </div>

                  <div class="form-group">
                    <input type="password" id="input" class="form-control" placeholder="Password" required>
                  </div>

                  <button class="btn btn-lg btn-default btn-block btn-login text-uppercase font-weight-bold mb-2" id="login" type="submit">LOG IN</button>
                  
                  <div class="text-center">
                    <tr>
                      <td><a href="#"><i style="font-size: 30px; margin: 10px; color: black" class="fa fa-facebook"></i></td></a>
                      <td><a href="#"><i style="font-size: 30px; margin: 10px; color: black" class="fa fa-google-plus"></i></td></a>
                    </tr>
                    
                    <a class="small" href="#"><p style="color: black"> Forgot password?</p></a>
                    <a href="#"><p style="color: black"> Skip</p></a>
                    
                  </div>
                  <p style="color: black; margin-top: 200px; margin-bottom: -100px">Don't have an account ? <a href="#"><span style="color: black; font-weight: bold;">REGISTER HERE</span></a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>