<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hackaton</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/footer.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
  <body>
    <div class="container-fullwidth">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Hackaton</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
            <form class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <form id="signin" class="navbar-form navbar-right" role="form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                   </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <footer class="footer">
     <div class="container">
    	 <p class="text-muted"><span>Copyright © 2017 Hackaton! Todos os direitos reservados.</span></p>
     </div>
    </footer>
  </body>
</html>
