<?php

class Template {


/**
    * Der Ordner in dem sich die Templates befinden.
    *
    * @access    private
    * @var       string
    */
   private $templateDir = "";

   /**
    * Der linke Delimter für einen Standard-Platzhalter.
    *
    * @access    private
    * @var       string
    */
   private $leftDelimiter = '##';

   /**
    * Der rechte Delimter für einen Standard-Platzhalter.
    *
    * @access    private
    * @var       string
    */
   private $rightDelimiter = '##';






   /**
    * Der komplette Pfad der Templatedatei.
    *
    * @access    private
    * @var       string
    */
   private $templateFile = "";


   /**
    * Der Dateiname der Templatedatei.
    *
    * @access    private
    * @var       string
    */
   private $templateName = "";

   /**
    * Der Inhalt des Templates.
    *
    * @access    private
    * @var       string
    */
   private $template = "";


   /**
    * Die Pfade festlegen.
    *
    * @access    public
    */
   public function __construct($tpl_dir = "") {
       // Template Ordner
       if ( !empty($tpl_dir) ) {
           $this->templateDir = $tpl_dir;
       }
   }

   /**
    * Eine Templatedatei öffnen.
    *
    * @access    public
    * @param     string $file Dateiname des Templates.
    * @uses      $templateName
    * @uses      $templateFile
    * @uses      $templateDir
    * @uses      parseFunctions()
    * @return    boolean
    */
    public function load($file)    {
        // Eigenschaften zuweisen
        $this->templateName = $file;
        $this->templateFile = $this->templateDir.$file;

        // Wenn ein Dateiname übergeben wurde, versuchen, die Datei zu öffnen
        if( !empty($this->templateFile) ) {
            if( file_exists($this->templateFile) ) {
                $this->template = file_get_contents($this->templateFile);
            } else {
                return false;
            }
        } else {
           return false;
        }
    }

   /**
    * Einen Standard-Platzhalter ersetzen.
    *
    * @access    public
    * @param     string $replace     Name des Platzhalters.
    * @param     string $replacement Der Text, mit dem der Platzhalter ersetzt
    *                                werden soll.
    * @uses      $leftDelimiter
    * @uses      $rightDelimiter
    * @uses      $template
    */
   public function assign($replace, $replacement) {
       $this->template = str_replace( $this->leftDelimiter.$replace.$this->rightDelimiter, $replacement, $this->template );
   }

   /**
    * Das "fertige Template" ausgeben.
    *
    * @access    public
    * @uses      $template
    */
   public function display() {
       echo $this->template;
   }

}
?>
