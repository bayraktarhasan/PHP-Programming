<?php

  /**
   * Instanzen der Klasse sollen beliebige Textinfos
   * mit einem Zeitstempel versehen in eine Datei schreiben.
   *
   * Singleton-Variante: Es kann nur ein Logger-Objekt erstellt werden.
   * @author Bayraktar Hasan
   */
  class Logger {
    private $logdatei;
    private Static $instance = null;

    private function __construct(String $dateiname){
      $this->logdatei = $dateiname;
    }
    /**
     * Wenn noch kein Logger-Objekt: erstelle eines
     * Wenn ein Logger-Objekt existiert: gebe Instanz Variable zurück
     */
    public Static function getLogger($dateiname)
    {
      if(self::$instance === null){
        self::$instance = new Logger($dateiname);
      }
      return self::$instance;
    }

    public function logThis($text){
      $text .= "\n";
      if(file_put_contents ($this->logdatei, $text, FILE_APPEND) === FALSE) {
        new Exception("Schreiben in Datei ist fehlgeschlagen!");
      }
    }


  }

 ?>
