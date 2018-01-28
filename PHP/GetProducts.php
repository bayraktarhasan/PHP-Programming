<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'webpage';


    if($mysqli = new mysqli($host,$user,$password,$database))
    {
      $von= filter_input(INPUT_GET, 'von', FILTER_SANITIZE_NUMBER_INT);
      $anzahl= filter_input(INPUT_GET, 'anzahl', FILTER_SANITIZE_NUMBER_INT);

      if(!isset($_GET['von'])) {
        $_GET['von'] = 0;
      }

      if(!isset($anzahl)) {
        $anzahl = 10;
      }

      $query = "SELECT * FROM produkt LIMIT ?,?;";
      $ps = $mysqli->prepare($query);

      $ps->bind_param('ii', $von, $anzahl);
      $ps->execute();
      $result = $ps->get_result();

      foreach ($result as $key => $value)
      {
        $bildurl = $value['Location'];
        echo "<li class=\"".'wrapper'."\" >";
           echo "<div class=\"".'showartikel'."\" >";
           echo '<a href="../PHP/Templates/index.php?value='. $value['ID'] .'">';
           echo "<img class=\"".'artikelBilder'."\" src=\"".$bildurl."\" alt=\"Es konnte kein Bild gefunden werden! \" height=\"200\" width=\"250\"></img>";
           echo '<p class="art"> '.$value['pName'] . '</p>';
           echo "</a>";
           echo '</div>';
           echo "</li>";
          }
        }


        else print_r('fehler probiers a anders mal :(')
  ?>

  <div class="border">
  </div>
  <div class=" wrapper border">

    <form class="showartikel" id="sort" action="./Aufgabensammlung5.php" method="get">
      <input placeholder="von" type="number" name="von" value="">
      <input placeholder="Treffer pro Seite" type="number" name="anzahl" value="">
      <input type="submit" name="anzeigen" value="anzeigen">
    </form>
  </div>

  <?php
    echo "<div class=\"".'wrapper'."\">";
    echo "<div id=\"".'sort'."\" class=\"".'showartikel'."\" >";
    if($_GET['von'] >= $anzahl)
    {
      echo '<a style="margin:35px;" href="./Aufgabensammlung5.php?von='. $_GET['von'] = $_GET['von']-$anzahl .'&anzahl='.$anzahl.' "  ><-zurueck</a>';
    }
    echo '<a style="margin:35px; padding-bottom:30px;"href="./Aufgabensammlung5.php?von='. $von=$von+$anzahl .'&anzahl='.$anzahl.' "  >weiter-></a>';
    echo "</div>";
    echo "</div>";
?>
