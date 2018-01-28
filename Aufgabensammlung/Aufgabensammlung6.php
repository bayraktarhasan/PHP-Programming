<!DOCTYPE php>
<php>
  <?php
    session_start();

    require_once('../PHP/Logger.php');
    require_once('../PHP/Produkt.php');
   ?>
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

      <?php
        include('../PHP/Navbars/NavbarSub.php');
       ?>

  <div class="jumbotron well ">
    <h2>
      Aufgabensammlung 6
    </h2>

    <?php
      if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
        echo '  <div class="border">
            <h1>Produkt erstellen:</h1>

            <form action="../PHP/NewProdukt.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="ProduktName" placeholder="Produkt Name">
              </div>

              <div class="form-group">
                <textarea rows="4" cols="50" class="form-control" id="textarea" name="textarea" maxlength=255  >Beschreibung</textarea>
              </div>



              <div class="form-group">
                <input type="file" name="file">
              </div>

              <div class="form-group">
                <input type="submit" name="btn-upload" value="Neuen Produkt erstellen">
              </div>
            </form>
          </div>
          ';
      } else {
        echo '
        <div class="border">
            <h3>Sie müssen eingeloggt sein, um Produkte zu erstellen!</h3>
          </div>';
      }
     ?>


    <div class="border">
      <p class="bold"> Aufgabe 2:</p>
      <?php
        $artikel = new Produkt('Yoda Actionfigur', '...', '61', 'test');
        $artikel2 = new Produkt('Mercedes ', '...', '61', 'test');
        echo $artikel->__toString() . ' ' . $artikel2->__toString();

        $logger = Logger::getLogger('../Logs/logdatei.txt');
        $logger->logThis('Aufgabensammlung 6, Aufgabe 1 wurde aufgerufen.');
      ?>
    </div>

    <div class="border">
      <p class="bold"> Aufgabe 2.1:</p>
      <?php
        try {
          $logger = Logger::getLogger('../Logs/logdatei.txt');
          $logger->logThis('Aufgabensammlung 6, Aufgabe 2 wurde aufgerufen. sadadsa');
        } catch (Exception $e) {
          // TODO: Sinvolle Ausnahmebehandlung
        }

       ?>
       <p>Es wurde eine Log-Datei erstellt.</p>
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
     <input type="hidden" name="page" value="./Aufgabensammlung/Aufgabensammlung6.php">
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
