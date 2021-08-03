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
    

    public function __construct($n, ExtremidadSuperior $ed, ExtremidadSuperior $ei, ExtremidadInferior $einf)
    {
        $this->name = $n;
        $this->extD = $ed;
        $this->extI = $ei;
        $this->extInf = $einf;
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

    public function cambiarExtD(ExtremidadSuperior $ed)
    {
        $this->extD = $ed;
    }

    public function cambiarExtI(ExtremidadSuperior $ei)
    {
        $this->extI = $ei;
    }

    public function cambiarExtInf(ExtremidadInferior $einf)
    {
        $this->extInf = $einf;
    }

}