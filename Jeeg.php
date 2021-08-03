<?php
include "ExtremidadSuperior.php";
include "ExtremidadInferior.php";
include "Tanque.php";
include "Taladro.php";
include "Brazo.php";
include "Piernas.php";
include "Motosierra.php";

class Jeeg {
    public $name;
    // extremidad d
    protected $extD;
    // extremidad i
    protected $extI;

    // extremidades inf
    protected $extInf;
    // atacar

    public function __construct($n, ExtremidadSuperior $bd, ExtremidadSuperior $bi, ExtremidadInferior $p)
    {
        $this->name = $n;
        $this->extD = $bd;
        $this->extI = $bi;
        $this->extInf = $p;
    }
    
    public function atacar()
    {
        $this->extInf->avanzar();
        $this->extD->atacar();
        $this->extD->atacar();
        $this->extI->atacar();
    }
    // super ataque
    public function superAtaque()
    {
        for ($i=0; $i < 10; $i++) { 
            $this->extI->atacar();
            $this->extD->atacar();
        }
    }
    // defender
    public function defender()
    {
        $this->extInf->retroceder();
        $this->extD->defender();
        $this->extI->defender();
    }

}