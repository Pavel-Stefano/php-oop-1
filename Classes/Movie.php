<?php
class Movie {
    protected $titolo;
    protected $genere;
    protected $regia;
    protected $paese;
    protected $annoProduzione;
    protected $durata;

    function __construct($_titolo, $_genere, $_regia, $_paese, $_annoProduzione, $_durata)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->regia = $_regia;
        $this->paese = $_paese;
        $this->annoProduzione = $_annoProduzione;
        $this->durata = $_durata;
    }
    public function getTitolo()
    {
        return $this->titolo;
    }
    public function getGenere()
    {
        return $this->genere;
    }
    public function getRegia()
    {
        return $this->regia;
    }
    public function getPaese()
    {
        return $this->paese;
    }
    public function getAnnoProd()
    {
        return $this->annoProduzione;
    }
    public function getDurata()
    {
        return $this->durata;
    }
}

?>