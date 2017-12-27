<?php

/**
 * Die Klasse soll beliebige Textinformationen
 * mit Zeitstempel versehen und in eine 
 * Datei auf dem Server schreiben.
 * @author John Doe <john.doe@example.com>
 * @version 
 */
class Logger
{
    //Deklaration eines Datenfeldes datei
    private $dateipfad;
    
    
    /**
     * Der Konstruktor erzeugt ein Logger-Objekt
     * @param String $dateipfad Der Pfad zur Logdatei
     */
    public function __construct($dateipfad) {
       
        //TODO: Parameter validieren, in diesem Fall
        //den Dateipfad. 
        $this->dateipfad = $dateipfad;
    }
    
    /**
     * Die Methode schreibt eine Logzeile in die Datei,
     * ergänzt durch einen Zeitstempel
     * @param String $text Der zu loggende Text
     * @param int $loglevel 0=Info, 1=Warning, 2=Error
     */
    public function logThis($text, $loglevel)
    {

        //1. Schritt: aktuellen Zeitstempel holen
        $timestamp = date("Y m d H:i", mktime());
        
        //2. Schritt: Zeile generieren mit Timestamp + Loglevel + Text
        switch ($loglevel) {
            case 0: $level = 'Info';
                break;
            case 1: $level = 'Warning';
                break;
            case 2: $level = 'Error';
                break;
            default: $level = 'Info';
                break;
        }
        $logzeile = $timestamp . " " . $level . " " . $text . "\r\n";
        echo $logzeile;
       
        //3. Schritt: in Datei schreiben
  
        
    }


}