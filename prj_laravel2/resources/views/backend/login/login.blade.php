<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('login/assets/img/logo-fav.png') }}">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href=" {{ asset('login/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('login/assets/css/app.css') }}" type="text/css">
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="{{ asset('login/assets/img/logo-xx.png') }}" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
                <form action="" method="post">
                	@csrf
                  <div class="form-group">
                    <input class="form-control" id="email" name="email" type="text" placeholder="Email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                  </div>
           
                  	<div class="col-md-9"><input type="submit" value="Login" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger"></div>
                </form>
              </div>
            </div>
       
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>