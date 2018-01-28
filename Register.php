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
      include('./PHP/CSSSwitch.php');
     ?>
  </head>

  <body>
    <div class="main">

      <?php
        include('./PHP/Navbars/Navbar.php');
       ?>


        <div class="container">
          <div class="jumbotron well text-center">
            <h2>
      Registrieren
    </h2>

            <form role="form" action="./PHP/RegisterQuery.php" method="post">
              <h2>Please Sign Up <small>It's free and always will be.</small></h2>
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Username" tabindex="3">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                    </div>
                  </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Create My Account" class="btn btn-primary btn-block btn-lg" tabindex="7">
                  </div>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>

    <footer class="footer">
      <div class="container text-center">
        <span class="text-muted">
      © by
      <?php
          require_once('./PHP/footer.php');
     ?>
   </span>

        <form class="stilSwitcher pull-right" id="stilSwitcher" action="StilSwitcher.php" method="get">
          <input type="hidden" name="page" value="Register.php">
          <input name="switchStil" value="Stil1" data-toggle="toggle" data-on="Stil 1" data-off="Stil 2" type="checkbox"
          <?php
          if(empty($_COOKIE[ "Stil"]))
          { $cookie="Stil2" ; }
          else
          { $cookie=$_COOKIE[ "Stil"]; }
          if ($cookie=='Stil1' )
          { echo 'checked'; }
          else
          { echo ''; } ?>>
        </form>
      </div>
    </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript" src="./src/js/stilSwitch.js"></script>
    <script type="text/javascript" src="./src/js/register.js"></script>
  </body>
</php>
