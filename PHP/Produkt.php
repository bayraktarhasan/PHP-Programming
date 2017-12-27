<?php
  /**
   * Die Klasse Produkt enthält alle Produkteigenschaften
   * und Methoden zum Umgang mit Produkten.
   * @author Bayraktar Hasan
   * @version 20.11.2017 v1
   */
  class Produkt {
    private $pnummer;
    private $ptitel;
    private $ptext;
    private $ppreis;
    private $pbildurl;

    public function __construct($ptitel, $ptext, $ppreis, $pbildurl)
    {
      $this -> setPtitel($ptitel);
      $this -> setPtext($ptext);
      $this -> setPpreis($ppreis);
      $this -> setPbildurl($pbildurl);

      //Produktnummer für temporäre Produkten
      //Tatsächliche Nummer wird vom DBMS vergeben
      $this -> pnummer = 0;
    }

//Setter-------------------------------------------------------------------------------------------
    /**
     * Set the value of Die Klasse Produkt enthält alle Produkteigenschaften
     *
     * @param mixed pnummer
     */
    public function setPnummer($pnummer)
    {
        $this->pnummer = $pnummer;
    }

    /**
     * Set the value of Ptitel
     *
     * @param mixed ptitel
     */
    public function setPtitel($ptitel)
    {
        $this->ptitel = $ptitel;
    }

    /**
     * Set the value of Ptext
     *
     * @param mixed ptext
     */
    public function setPtext($ptext)
    {
        $this->ptext = $ptext;
    }

    /**
     * Set the value of Ppreis
     *
     * @param mixed ppreis
     */
    public function setPpreis(int $ppreis)
    {
        $this->ppreis = $ppreis;
    }

    /**
     * Set the value of Pbildurl
     *
     * @param mixed pbildurl
     */
    public function setPbildurl($pbildurl)
    {
        $this->pbildurl = $pbildurl;
    }
//Gettter---------------------------------------------------------------------------------------
    /**
     * Get the value of Die Klasse Produkt enthält alle Produkteigenschaften
     *
     * @return mixed
     */
    public function getPnummer()
    {
        return $this->pnummer;
    }

    /**
     * Get the value of Ptitel
     *
     * @return mixed
     */
    public function getPtitel()
    {
        return $this->ptitel;
    }

    /**
     * Get the value of Ptext
     *
     * @return mixed
     */
    public function getPtext()
    {
        return $this->ptext;
    }

    /**
     * Get the value of Ppreis
     *
     * @return mixed
     */
    public function getPpreis()
    {
        return $this->ppreis;
    }

    /**
     * Get the value of Pbildurl
     *
     * @return mixed
     */
    public function getPbildurl()
    {
        return $this->pbildurl;
    }
//------------------------------------------------------------------------------------
    public function getPtitel_toHTML()
    {
      return "<p>$this->ptitel</p>";
    }

    public function getPtext_toHTML()
    {
      return "<p>$this->ptext</p>";
    }

    public function getPpreis_toHTML()
    {
      return "<p>$this->ppreis</p>";
    }

    public function getPbildurl_toHTML()
    {
      return "<p>$this->pbildurl</p>";
    }

    public function getPnummer_toHTML()
    {
      return "<p>$this->pnummer</p>";
    }


    public function __toString()
    {
      return $this->getPtitel_toHTML();
    }


    // public functionn saveToDb() {
    //
    // }


}
 ?>
