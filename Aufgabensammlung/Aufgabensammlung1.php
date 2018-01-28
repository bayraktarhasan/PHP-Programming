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

      <div class="jumbotron well  text-center">
        <h2>
          Aufgabensammlung 1
        </h2>

        <div class="border">
        </div>

        <div class="border">
          <p class="bold"> Aufgabe 3:</p>
          <?php
            $arrayName = array("Bize Her Yer Trabzon", "TestiTest", "Du besuchen meine Website, gut du bist");
            $spruch = $arrayName[rand(0, count($arrayName) - 1)];
            echo $spruch;
          ?>
        </div>

        <div class="border">
          <p class="bold"> Ausgabe alle Werte:</p>
          <?php
            $arrayName = array("Bize Her Yer Trabzon", "TestiTest", "Du besuchen meine Website, gut du bist");
            foreach($arrayName as $value){
              echo $value . "<br>";
            }
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
     <input type="hidden" name="page" value="./Aufgabensammlung/Aufgabensammlung1.php">
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
