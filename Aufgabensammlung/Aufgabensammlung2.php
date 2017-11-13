<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Bayraktar Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <?php
    if(empty($_COOKIE["Stil"])) {
       $cookie = "Stil2";
     } else {
       $cookie = $_COOKIE["Stil"];
     }

     if ($cookie == 'Stil1') {
       echo '<link rel="stylesheet" href="../src/css/master.css">';
     } else {
         echo '<link rel="stylesheet" href="../src/css/master2.css">';
     }
    ?>
    <title>Bayraktar Hasan</title>
  </head>
  <body>
    <div class="main">

    <nav class="navbar navbar-default navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../home.php">Bayraktar Hasan</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="../home.php">Home</a></li>
          <li  class="active"><a href="../Aufgaben.php">Aufgaben</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><p class="navbar-text">Already have an account?</p></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
  			<ul id="login-dp" class="dropdown-menu">
  				<li>
  					 <div class="row">
  							<div class="col-md-12">
  								Login
  								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
  											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
  										</div>
  										<div class="form-group">
  											 <label class="sr-only" for="exampleInputPassword2">Password</label>
  											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                               <div class="help-block text-right"><a href="">Forget the password ?</a></div>
  										</div>
  										<div class="form-group">
  											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
  										</div>
  										<div class="checkbox">
  											 <label>
  											 <input type="checkbox"> keep me logged-in
  											 </label>
  										</div>
  								 </form>
  							</div>
  							<div class="bottom text-center">
  								New here ? <a href="../Register.php"><b>Join Us</b></a>
  							</div>
  					 </div>
  				</li>
  			</ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

      <div class="jumbotron well text-center">
        <h2>
          Aufgabensammlung 2
        </h2>
        <div class="border">
        </div>

        <div class="border">
          <p class="bold"> Aufgabe 2.1:</p>
          <?php
            while (list($var,$value) = each ($_SERVER)) {
              echo "$var => $value <br />";
            }
          ?>
        </div>

        <div class="border">
          <p class="bold"> Aufgabe 2.1.1:</p>
          <?php
            echo $_SERVER['HTTP_USER_AGENT'];
          ?>
        </div>

      </div>
    </div>
  </div>
</div>
</div>

<footer class="footer">
  <div class="container text-center">
    <span class="text-muted">
      © by
      <?php
        require_once('../PHP/footer.php');
     ?>
   </span>

   <form class="stilSwitcher pull-right" id="stilSwitcher" action="../StilSwitcher.php" method="get">
     <input type="hidden" name="page" value="./Aufgabensammlung/Aufgabensammlung2.php">
     <input name="switchStil"  value="Stil1" data-toggle="toggle" data-on="Stil 1" data-off="Stil 2" type="checkbox"
     <?php
      if(empty($_COOKIE["Stil"])) {
         $cookie = "Stil2";
       } else {
         $cookie = $_COOKIE["Stil"];
       }
       if ($cookie == 'Stil1') {
         echo 'checked';
       } else {
         echo '';
       }
    ?>>
   </form>
   </div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script type="text/javascript" src="../src/js/stilSwitch.js"></script>
  </body>
</php>
