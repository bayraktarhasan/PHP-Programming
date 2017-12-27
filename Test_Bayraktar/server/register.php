<?php

//Suche rekursiv nach der Email-Adresse
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if ($item->email == $needle)
        {
            return true;
        }
    }
    return false;
}

//Wenn Skript Parameter übergeben wurden
if (!empty($_GET["email"]) && !empty($_GET["Vorname"]) && !empty($_GET["Nachname"]))
{
    //Hole Parameterwerte
    $email = filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
    $vorname = filter_input(INPUT_GET, "Vorname", FILTER_SANITIZE_STRING);
    $nachname = filter_input(INPUT_GET, "Nachname", FILTER_SANITIZE_STRING);
  

    //Hole NL-Liste aus Datei
    //$nlliste = unserialize(file_get_contents('nlliste.txt'));
    $jsonliste = json_decode(file_get_contents('nlliste.json'));
    //var_dump($jsonliste);
    //var_dump($nlliste);
    
    //Wenn Email-Adresse bereits in Liste vorhanden
    if (in_array_r($email,$jsonliste))
    {
         echo '<h1>Registrierung fehlgeschlagen</h1><p>User bereits vorhanden</p>';
    }
    //Wenn Email-Adresse noch nicht vorhanden:
    else
    {
        //Schreibe neuen NL-Anmeldung in den Liste
        //$nlliste[$email]=array($vorname, $nachname);
        
        array_push($jsonliste,(object)array("vorname" => $vorname, "nachname" => $nachname, "email" => $email));
        //var_dump($jsonliste);
        
        //$serialliste = serialize($nlliste);
        file_put_contents('nlliste.json', json_encode($jsonliste));
        //file_put_contents('nlliste.txt', $serialliste);
        echo '<h1>Registrierung erfolgreich</h1>';
        //var_dump($nlliste);
    }

}
//Wenn keine oder leere Parameter übergeben wurden:
else{
    echo '<h1>Registrierung fehlgeschlagen</h1><p>Bitte Formular vollständig ausfüllen.</p>';
    //var_dump($_GET);
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>