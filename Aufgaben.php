<!DOCTYPE php>
<php>
  <?php
    session_start();
   ?>
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
    <title>Bayraktar Hasan</title>
  </head>
  <body>
    <div class="main">

      <?php
        include('./PHP/Navbars/Navbar.php');
       ?>

      <div class="jumbotron well text-center">
        <h2>
          Aufgabensammlung
        </h2>
        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung1.php">
          Aufgabensammlung 1
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung2.php">
          Aufgabensammlung 2
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung3.php">
          Aufgabensammlung 3
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung4.php">
          Aufgabensammlung 4
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung5.php">
          Aufgabensammlung 5
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung6.php">
          Aufgabensammlung 6
          </a>
        </p>

        <p>
          <a href="./Aufgabensammlung/Aufgabensammlung7.php">
          Aufgabensammlung 7
          </a>
        </p>

        <p>
          <?php
          if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
            echo '<a href="./Aufgabensammlung/Geheim.php">
                  Geheim
                  </a>';
          }
           ?>
        </p>

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
          require_once('./PHP/footer.php');
     ?>
   </span>

   <form class="stilSwitcher pull-right" id="stilSwitcher" action="StilSwitcher.php" method="get">
     <input type="hidden" name="page" value="Aufgaben.php">
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
  <script type="text/javascript" src="./src/js/stilSwitch.js"></script>
  </body>
</php>
