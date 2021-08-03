<?php
include "Brazo.php";
include "Piernas.php";

class Jeeg {
    public $name;
    // extremidad d
    protected $brazoD;
    // extremidad i
    protected $brazoI;

    // extremidades inf
    protected $piernas;
    // atacar

    public function __construct($n, Brazo $bd, Brazo $bi, Piernas $p)
    {
        $this->name = $n;
        $this->brazoD = $bd;
        $this->brazoI = $bi;
        $this->piernas = $p;
    }
    public function atacar()
    {
        $this->piernas->avanzar();
        $this->brazoD->atacar();
        $this->brazoD->atacar();
        $this->brazoI->atacar();
    }
    // super ataque
    public function superAtaque()
    {
        for ($i=0; $i < 10; $i++) { 
            $this->brazoI->atacar();
            $this->brazoD->atacar();
        }
    }
    // defender

    public function defender()
    {
        $this->piernas->retroceder();
        $this->brazoD->defender();
        $this->brazoI->defender();
    }

}