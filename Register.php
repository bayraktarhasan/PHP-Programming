<!DOCTYPE php>
<php>
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Bayraktar Hasan">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="src/master.css">
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
        <a class="navbar-brand" href="home.php">Bayraktar Hasan</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
          <li><a href="Aufgaben.php">Aufgaben</a></li>

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
  								New here ? <a href="#"><b>Join Us</b></a>
  							</div>
  					 </div>
  				</li>
  			</ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


<div class="container">

      <div class="jumbotron well text-center">
        <h2>
          Registrieren
        </h2>
        <form role="form" action="">
        			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
        			<hr class="colorgraph">
        			<div class="row">
        				<div class="col-xs-6 col-sm-6 col-md-6">
        					<div class="form-group">
                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
        					</div>
        				</div>
        				<div class="col-xs-6 col-sm-6 col-md-6">
        					<div class="form-group">
        						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
        					</div>
        				</div>
        			</div>
        			<div class="form-group">
        				<input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
        			</div>
        			<div class="form-group">
        				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
        			</div>
        			<div class="row">
        				<div class="col-xs-6 col-sm-6 col-md-6">
        					<div class="form-group">
        						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
        					</div>
        				</div>
        				<div class="col-xs-6 col-sm-6 col-md-6">
        					<div class="form-group">
        						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
        					</div>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-md-2">
        					<span class="button-checkbox">
        						<button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
        					</span>
        				</div>
        				<div class="col-md-10">
        					 By clicking <strong class="label label-primary">Create My Account</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
        				</div>
        			</div>

        			<hr class="colorgraph">
        			<div class="row">
        				<div class="col-md-12"><input type="submit" value="Create My Account" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        			</div>
        		</form>

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
        $datum = date('Y');
        $author = 'Bayraktar Hasan';
        echo $author, " ",  $datum;
     ?>
   </span>
  </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</php>
